<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Image;

class ItemController extends Controller
{
    public function kids(Request $request)
    {
        $categoryId = $request->input('category_id');
        $priceMin = $request->input('price_min');
        $priceMax = $request->input('price_max');
        $styleFabricFlags = $request->input('style_fabric_flags', []);
        $colour = $request->input('colour');
        $sort = $request->input('sort');

        $query = Item::query()->where('main_category', 'like', 'KIDS');

        if (!empty($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        if (!empty($priceMin)) {
            $query->where('price', '>=', $priceMin);
        }

        if (!empty($priceMax)) {
            $query->where('price', '<=', $priceMax);
        }

        if (!empty($colour)) {
            $query->where('colour', $colour);
        }

        if (!empty($styleFabricFlags)) {
            $sum = array_sum($styleFabricFlags);
            $query->whereRaw('style_fabric & ? = ?', [$sum, $sum]);
        }

        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'popular':
                $query->orderBy('times_bought', 'desc');
                break;
            case 'newest':
                $query->orderBy('release_date', 'desc');
                break;
            default:
                $query->orderBy('item_id', 'desc');
                break;
        }

        $items = $query->paginate(9)->appends($request->all());

        return view('kids', compact('items'));
    }

    public function mene(Request $request)
    {
        $categoryId = $request->input('category_id');
        $priceMin = $request->input('price_min');
        $priceMax = $request->input('price_max');
        $styleFabricFlags = $request->input('style_fabric_flags', []);
        $colour = $request->input('colour');
        $sort = $request->input('sort');

        $query = Item::query()->where('main_category', 'like', 'MEN');

        if (!empty($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        if (!empty($priceMin)) {
            $query->where('price', '>=', $priceMin);
        }

        if (!empty($priceMax)) {
            $query->where('price', '<=', $priceMax);
        }

        if (!empty($colour)) {
            $query->where('colour', $colour);
        }

        if (!empty($styleFabricFlags)) {
            $sum = array_sum($styleFabricFlags);
            $query->whereRaw('style_fabric & ? = ?', [$sum, $sum]);
        }

        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'popular':
                $query->orderBy('times_bought', 'desc');
                break;
            case 'newest':
                $query->orderBy('release_date', 'desc');
                break;
            default:
                $query->orderBy('item_id', 'desc');
                break;
        }

        $items = $query->paginate(9)->appends($request->all());

        return view('men', compact('items')); // <--- tu bola zmena
    }

    public function womene(Request $request)
    {
        $categoryId = $request->input('category_id');
        $priceMin = $request->input('price_min');
        $priceMax = $request->input('price_max');
        $styleFabricFlags = $request->input('style_fabric_flags', []);
        $colour = $request->input('colour');
        $sort = $request->input('sort');

        $query = Item::query()->where('main_category', 'like', 'WOMEN');

        if (!empty($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        if (!empty($priceMin)) {
            $query->where('price', '>=', $priceMin);
        }

        if (!empty($priceMax)) {
            $query->where('price', '<=', $priceMax);
        }

        if (!empty($colour)) {
            $query->where('colour', $colour);
        }

        if (!empty($styleFabricFlags)) {
            $sum = array_sum($styleFabricFlags);
            $query->whereRaw('style_fabric & ? = ?', [$sum, $sum]);
        }

        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'popular':
                $query->orderBy('times_bought', 'desc');
                break;
            case 'newest':
                $query->orderBy('release_date', 'desc');
                break;
            default:
                $query->orderBy('item_id', 'desc');
                break;
        }

        $items = $query->paginate(9)->appends($request->all());

        return view('women', compact('items')); // <--- tu bola zmena
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        $suggestedItems = Item::where('main_category', $item->main_category)
            ->where('item_id', '!=', $id) // exclude current item
            ->take(4) // Limit to 4 products
            ->get(); // Fetch the results

        return view('product_info', compact('item', 'suggestedItems'));
    }

    public function showKids()
    {
        $items = Item::with('image')->where('parameters', 'KIDS')->paginate(9);
        return view('kids', compact('items'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $items = Item::when($search, function ($query, $search) {
            return $query->whereRaw('LOWER(item_name) LIKE ?', ['%' . strtolower($search) . '%']);
        })->paginate(9);

        return view('index', compact('items',));
    }

    public function main()
    {
        $suggestedItems = Item::inRandomOrder()->take(4)->get();
        $suggestedItems2 = Item::inRandomOrder()->take(4)->get();
        return view('main', compact('suggestedItems','suggestedItems2')); // Pass suggested items to the main page view
    }



    public function cart()
    {
        $suggestedItems = Item::take(4)->get();

        return $suggestedItems;
    }

    public function show_all()
    {
        $items = Item::all();
        $categories = Category::all()->groupBy('main_category');

        return view('admin', [
            'items' => $items,
            'categories' => $categories
        ]);
    }

    public function destroy($item_id)
    {
        $item = Item::findOrFail($item_id);

        foreach ($item->images as $image) {
            // Remove image file from storage (optional, only if you manage physical files)
            $imagePath = public_path('dataset_pics/' . $image->image_name);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            info("Deleting file: {$imagePath}");
            // Delete image record from DB
            $image->delete();
        }

        $item->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        // Validate request
        /*$validated = $request->validate([
            'name' => 'required|string|max:255',
            'big_category' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'parameters' => 'nullable|string',
            'color' => 'required|string',
            'style_fabric' => 'array', // optional, defaults to []
        ]);*/

        $item->item_name = $request->item_name;
        $item->main_category = $request->big_category;
        $item->category_id = $request->category_id;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->parameters = $request->parameters;
        $item->colour = $request->color;

        $styleFabricValues = $request->input('style_fabric', []);
        $combinedStyleFabric = array_reduce($styleFabricValues, function ($carry, $value) {
            return $carry | (int)$value;
        }, 0);
        $item->style_fabric = $combinedStyleFabric;

        $item->save();

        return redirect()->back()->with('success', 'Item updated successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'parameters' => 'nullable|string',
            'category_id' => 'required|numeric',
            'style' => 'nullable|array',
            'fabric' => 'nullable|array',
            'colour' => 'required|string',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if (!$request->hasFile('images') || count($request->file('images')) < 2) {
            return back()->withErrors(['images' => 'You must upload at least 2 images.'])->withInput();
        }

        $styleValue = collect($request->style)->sum();
        $fabricValue = collect($request->fabric)->sum();
        $styleFabric = $styleValue + $fabricValue;

        $item = Item::create([
            'item_name' => $request->item_name,
            'price' => $request->price,
            'description' => $request->description,
            'parameters' => $request->parameters,
            'category_id' => $request->category_id,
            'main_category' => $request->main_category,
            'style_fabric' => $styleFabric,
            'colour' => $request->colour,
            'times_bought' => 0,
            'release_date' => now(),
        ]);

        foreach ($request->file('images') as $image) {
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('dataset_pics'), $imageName);

            Image::create([
                'item_id' => $item->item_id,
                'image_name' => $imageName,
            ]);
        }

        return back()->with('success', 'Item added successfully!');
    }
}

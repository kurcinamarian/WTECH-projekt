<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;

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

        // Get suggested items (limit to 3, no pagination)
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
        // Fetch suggested items for the main page
        $suggestedItems = Item::inRandomOrder()->take(4)->get();
        $suggestedItems2 = Item::inRandomOrder()->take(4)->get();
        return view('main', compact('suggestedItems','suggestedItems2')); // Pass suggested items to the main page view
    }



    public function cart()
    {
        // Fetch suggested items for the main page
        $suggestedItems = Item::take(4)->get(); // Limit to 4 products

        return $suggestedItems; // Pass suggested items to the main page view
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

    public function destroy($id)
    {
        // TODO: Delete item with given ID
    }

    // Update an item (edit)
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

        // Assign values
        $item->item_name = $request->item_name;
        $item->main_category = $request->big_category;
        $item->category_id = $request->category_id;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->parameters = $request->parameters;
        $item->colour = $request->color;

        // Calculate combined style_fabric (bitwise OR)
        $styleFabricValues = $request->input('style_fabric', []);
        $combinedStyleFabric = array_reduce($styleFabricValues, function ($carry, $value) {
            return $carry | (int)$value;
        }, 0);
        $item->style_fabric = $combinedStyleFabric;

        $item->save();

        return redirect()->back()->with('success', 'Item updated successfully.');
    }
}

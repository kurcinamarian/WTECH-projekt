<?php

namespace App\Http\Controllers;

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

        $query = Item::query()->where('main_category', 'like', '%KIDS%');


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

}

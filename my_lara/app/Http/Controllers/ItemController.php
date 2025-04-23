<?php

// app/Http/Controllers/ItemController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function kids(Request $request)
    {
        $sort = $request->query('sort');

        $query = Item::where('main_category', 'Kids');

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
                $query->orderBy('release_date', 'desc'); // default sort
        }

        // Stránkovanie – 9 produktov na stránku
        $items = $query->paginate(9)->appends(['sort' => $sort]);

        return view('kids', compact('items', 'sort'));
    }
}

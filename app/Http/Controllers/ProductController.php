<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request) {
        $categories = Category::orderBy('name')->get();
        $subcategories = Subcategory::orderBy('name')->get();

        $categoryFilter = $request->query('category');
        $subcategoryFilter = $request->query('subcategory');

        $itemsQuery = Item::with(['subcategory', 'category', 'brand'])
            ->leftJoin('subcategories', 'items.subcategory_id', '=', 'subcategories.id');

        if ($subcategoryFilter) {
            $itemsQuery->where('items.subcategory_id', $subcategoryFilter);
        }

        if ($categoryFilter) {
            $itemsQuery->where('items.category_id', $categoryFilter);
        }

        $items = $itemsQuery
            ->orderBy('subcategories.name', 'asc')
            ->orderBy('items.brand_id', 'asc')
            ->select('items.*')
            ->get();

        $grouped = $items->groupBy(fn ($item) => $item->subcategory->name ?? 'Tanpa Subkategori');

        return view('product.index', compact('grouped', 'categories', 'subcategories', 'categoryFilter', 'subcategoryFilter'));
    }
    public function detail($c_alt, $i_alt) {
        $category = Category::where('alt', $c_alt)->firstOrFail();
        $item = $category->items->where('alt', $i_alt)->first();
        $features = $item->features;

        return view('product.detail', compact('category', 'item', 'features'));
    }
}

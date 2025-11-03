<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product() {
        $categories = Category::all();
        return view('product.product', compact('categories'));
    }

    public function index($c_alt) {
        $category = Category::where('alt', $c_alt)->firstOrFail();
        $items = Item::with(["subcategory", "brand"])->where("category_id", $category->id)->get();
        $grouped = $items->groupBy(function($item) {
            return $item->subcategory->name ?? "Tanpa Subkategori";
        });
        return view("product.index", compact("category", "grouped"));
    }
    public function detail($c_alt, $i_alt) {
        $category = Category::where('alt', $c_alt)->firstOrFail();
        $item = $category->items->where('alt', $i_alt)->first();
        $features = $item->features;

        return view('product.detail', compact('category', 'item', 'features'));
    }
}

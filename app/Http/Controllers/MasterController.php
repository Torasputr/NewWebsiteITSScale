<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Newuser;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function searchItems(Request $request)
    {
        $query = $request->input('q');
        $items = Item::with('category', 'brand')->where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($items);
    }

    public function newsletter(Request $request) {
        $request->validate([
            'email' => 'email'
        ]);

        Newuser::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with("success", 'Terimakasih Telah Berlangganan ke Newsletter Kami');
    }
}

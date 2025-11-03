<?php

namespace App\Http\Controllers;

use App\Mail\ServiceFormSubmitted;
use App\Models\Newkarir;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GSCController extends Controller
{
    public function gsc() {
        return view('gsc.gsc');
    }
    public function submitForm(Request $request)
    {
        // Validate the form input
        $request->validate([
            'type' => 'required',
            'sn' => 'required|string|max:255',
            'name' => 'nullable|string|max:255',
            'sales' => 'nullable|string|max:255',
            'company' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'tanggal' => 'nullable|date',
            'keterangan' => 'nullable|string',
        ]);

        $service = new Service();
        $service->type = $request->input('type');
        $service->sn = $request->input('sn');
        $service->name = $request->input('name');
        $service->sales = $request->input('sales');
        $service->company = $request->input('company');
        $service->phone = $request->input('phone');
        $service->address = $request->input('address');
        $service->tanggal = $request->input('tanggal');
        $service->keterangan = $request->input('keterangan');
        $service->save();

        Mail::to('tootnootgpt@gmail.com')->send(new ServiceFormSubmitted($request->all()));
        // Return a response
        return redirect()->back()->with('success', 'Terimakasih banyak, tim kami akan segera menghubungi Anda untuk melakukan konfirmasi lebih lanjut.');
    }
}

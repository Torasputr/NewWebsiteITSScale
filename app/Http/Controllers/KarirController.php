<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationSubmitted;
use App\Mail\SendToHR;
use App\Models\Newkarir;
use App\Models\Position;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class KarirController extends Controller
{
    public function karir() {
        $positions = Position::with('responsibilities')->get();
        return view('karir.karir', compact('positions'));
    }
    public function karirmodal() {
        return view('karir.modal');
    }

    public function add(Request $request, $positionId) {
        $request->validate([
            'cv' => 'required|url',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'currentCompany' => 'nullable|string',
            'linkedin' => 'nullable|url',
            'portfolio' => 'nullable|url',
        ]);

        $positionId = $request->input('position_id');
        $position = Position::find($positionId);

        if (!$position) {
            return back()->with('error', 'Position not found.');
        }

        $newkarir = Newkarir::create([
            'position_id' => $positionId,
            'cv' => $request->input('cv'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'currentCompany' => $request->input('currentCompany'),
            'linkedin' => $request->input('linkedin'),
            'portfolio' => $request->input('portfolio'),
        ]);

        $data = [
            'name' => $newkarir->name,
            'email' => $newkarir->email,
            'phone' => $newkarir->phone,
            'address' => $newkarir->address,
            'currentCompany' => $newkarir->currentCompany,
            'linkedin' => $newkarir->linkedin,
            'portfolio' => $newkarir->portfolio,
            'cv' => $newkarir->cv,
            'position_name' => $position->name,
        ];

        Mail::to('tootnootgpt@gmail.com')->send(new JobApplicationSubmitted($data));
        return redirect('/karir')->with('success', 'Terimakasih Atas Pendaftarannya');
    }

}

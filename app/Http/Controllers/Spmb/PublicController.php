<?php

namespace App\Http\Controllers\Spmb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpmbSubmission;

class PublicController extends Controller
{
    public function showForm()
    {
        return view('spmb.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'school' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        SpmbSubmission::create($data);

        return redirect()->route('spmb')->with('success','Terima kasih. Data pendaftaran berhasil dikirim.');
    }
}

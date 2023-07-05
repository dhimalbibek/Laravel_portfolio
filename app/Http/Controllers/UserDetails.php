<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class UserDetails extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'DateOfBirth' => 'required',
            'degree' => 'required',
            'about_description' => 'required',



        ]);
        $about = Profile::create($data);
        // return view('users/about');
        return redirect()->route('users.about');
    }

    public function about($id)
    {
        $read = Profile::find($id);
        return view('users.about', compact('read'));
        // return view('users.about', ['read' => $read]);
    }
}
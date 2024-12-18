<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function update(Request $request)
    {

        $user = $request->user();
        dd($user);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'nrk' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $user->update($data);

        return redirect('/profile')->with('success', 'Profile updated successfully');
    }
}

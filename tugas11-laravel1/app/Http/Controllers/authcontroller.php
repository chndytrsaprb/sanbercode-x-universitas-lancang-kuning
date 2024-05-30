<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function register() {
        return view('page.register');
    }

    public function send(Request $request) {
        $Firstname = $request->input('fname');
        $Lastname = $request->input('lname');

        return view('page.welcome', ['Firstname' => $Firstname, 'Lastname' => $Lastname, ]);
    }
}

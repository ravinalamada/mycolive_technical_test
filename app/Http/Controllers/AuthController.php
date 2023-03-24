<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        // Input constraint
        // username must be unique, min length of 6 , max length of 30, and is required
        // password is required, min length of 6 and max length of 30
        // password confirmation is required and must be same as password field
        // show error whenever needed if any of this constraint got violated
        return view('login');

    }

    public function register(Request $request) {
        // Input constraint:
        // -username must be unique, min length of 6 , max length of 30, and is required
        // -password is required, min length of 6 and max length of 30
        // -password confirmation is required and must be same as password field
        // If all constraint is satisfied, hash the password
        // store the password and the username in users table.
        // show error whenever needed if any of this constraint got violated

        return view('register');
    }
}
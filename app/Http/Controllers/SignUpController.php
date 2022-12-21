<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        error_log(json_encode($request->post()));
        return view('sign_up');
    }
    public function signUp(Request $request)
    {
        error_log($request);
    }
}
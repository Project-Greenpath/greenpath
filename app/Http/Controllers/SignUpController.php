<?php

namespace App\Http\Controllers;

use App\Models\Student;

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
        error_log(sprintf("POST DATA: %s", json_encode($request->post())));
        if ($request->isMethod('POST')) {
            $request->validate([
                'collegeid' => 'required',
                'full_name' => 'required',
                'password' => 'required|string|min:8',
                'department' => 'required',
                'yog' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
            ]);

            Student::create($request->all());

            return redirect()->route('sign-up')
                ->with('success', 'Student created successfully.');
        }
        return view('sign_up');
    }
    public function signUp(Request $request)
    {
        error_log($request);
    }
}
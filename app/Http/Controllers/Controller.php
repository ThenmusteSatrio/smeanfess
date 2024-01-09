<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
    }
    public function menfess()
    {
        return view('dummy');
    }
    public function kritik()
    {
        return view('dummy');
    }
    public function login()
    {
        return view('login');
    }
    public function auth(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        if (Auth::guard('web')->attempt(['name' => $name, 'password' => $password])) {
            return redirect()->route('admin');
        } else {
            return redirect()->back()->with('error', 'Login Gagal');
        }
    }
}

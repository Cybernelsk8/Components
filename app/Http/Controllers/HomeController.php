<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('welcome',compact('data'));
    }

    public function prueba(Request $request)
    {
        $this->validate($request,[
            'user'=>'required|email',
            'pass'=>'required',
        ]);

        return $request->all();
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $data = User::select('id','name','email')
                    ->get();
        return view('welcome',compact('data'));
    }

    public function prueba(Request $request)
    {
        $this->validate($request,[
            'user'=>'required|email',
            'pass'=>'required',
        ]);

        return redirect()->back()->with('info','Excelente todo esta bién');

    }
}

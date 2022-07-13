<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = DB::table('tks_tickets')
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

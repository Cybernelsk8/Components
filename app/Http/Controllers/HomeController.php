<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('welcome',compact('data'));
    }
}
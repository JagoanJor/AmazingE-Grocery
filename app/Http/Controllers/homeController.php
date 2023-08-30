<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        return view('home', [
            "items" => DB::table('items')->paginate(10)
        ]);
    }
}

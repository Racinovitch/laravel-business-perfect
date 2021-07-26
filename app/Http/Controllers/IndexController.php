<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $dataHome=Home::all();

        return view('pages.index', compact('dataHome'));
    }
}

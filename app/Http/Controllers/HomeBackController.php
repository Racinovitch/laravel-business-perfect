<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeBackController extends Controller
{
    public function  index(){
        $data = Blog::all();
        return view('backoffice/homeBackoff', compact("data"));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $dataBlog=Blog::all();
        return view('pages.blog',compact('dataBlog'));
    }
}

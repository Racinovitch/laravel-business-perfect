<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $dataBlog=Blog::all()->random(2);
        return view('pages.blog',compact('dataBlog'));
    }

    public function create(){
        return view('pages.create_blogs');
    }

    public function store (Request $request){
        $item = new Blog;
        $item->titre = $request->titre;
        $item->image = $request->image;
        $item->description = $request->description;
        $item->save();
        return redirect()->back();


    }





}

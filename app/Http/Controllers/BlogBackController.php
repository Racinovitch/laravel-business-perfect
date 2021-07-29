<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogBackController extends Controller
{
    public function index(){
        $dataBlog=Blog::all();
        return view('backoffice.blog.Blogbackoff', compact("dataBlog"));
    }


    public function create(){
        return view('backoffice.blog.create_blogs');
    }

    public function store (Request $request){
        $item = new Blog();
        $item->titre = $request->titre;
        $item->image = $request->image;
        $item->description = $request->description;
        $item->save();
        return redirect()->back();


    }

    public function destroy ($id){

       $sol = Blog::find($id);
       $sol->delete();
       return redirect("/admin/blog");

    }


    public function show(Blog $id){
        $data = $id;
        return view('backoffice.blog.showBlog', compact("data"));
    }
}

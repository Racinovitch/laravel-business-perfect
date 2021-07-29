<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;

class BlogBackAllController extends Controller
{
    public function index(){
        $dataBlog = Blog::all();
        return view("backoffice/blog/AllBlogBackoff", compact('dataBlog'));
    }
    public function  destroy($id){
        $sol = Blog::find($id);
        $sol->delete();
        // $dragon = Blog::all();
        // if ($dragon<1) {
            return redirect('/admin/blogAll');

        // }
            // return redirect("/admin/blog");


    }
}

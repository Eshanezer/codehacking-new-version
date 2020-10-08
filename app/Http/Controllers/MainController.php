<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home(){
       // $categories = DB::table('categories')->where('is_active',false)->get();
        $categories= Category::all();
        $posts = Post::orderBy('id','desc')->take(3)->get();
        return view('welcome',compact('categories','posts'));
    }

    public function me(){
        return view('about-me');
    }
}

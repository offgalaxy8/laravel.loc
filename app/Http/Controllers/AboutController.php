<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        //return 'this is page';
//        $posts = Post::all();
        return view('about');
    }

}

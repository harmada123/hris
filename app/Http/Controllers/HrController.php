<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HrController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')->paginate(1);
        return view('hr.index')->with(compact('posts'));
    }

}

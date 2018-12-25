<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //В жесткую
/*    public function index(){
        return 'index';
    }*/
/*    public function index(){
        return view('posts.index');
    }*/
    public function index(){
        $title = 'title_blablabla';
        return view('posts.index', compact ('title'));
    }

}

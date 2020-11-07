<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends BaseAuthController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        $title = 'postsite';

        /*return view('home', compact('posts'));*/

        /*return view('home')
            ->with('posts',$posts)
            ->with('title',$title);*/

        return view('home', ["posts" => $posts, "title" => $title]);
    }
}

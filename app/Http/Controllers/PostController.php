<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index(Request $request) {
		
		$posts = app(Pipeline::class)
    				->send(Post::query())
    				->through([
    					\App\Filter\Active::class,
    					\App\Filter\Order::class,
    				])
    				->thenReturn()
    				->get()
    				->toArray();

    	return view('posts',compact('posts'));
    }
}

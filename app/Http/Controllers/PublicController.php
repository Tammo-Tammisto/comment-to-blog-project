<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
    public function index(){
        $posts = Post::with('user:id,name')->latest()->simplePaginate(16);
        return view('welcome', compact('posts'));
    }

    public function secure(){
        return 'Secure';
    }

    public function post(Post $post){
        return view('post', compact('post'));
    }
}

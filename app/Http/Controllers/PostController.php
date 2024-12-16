<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): Factory|View
    {
        $posts = Post::all();

        return view(view: 'posts.index', data: compact(car_name: 'posts'));
    }

    public function show($id): View
    {
        $post = Post::with(relations: 'comments')->find(id: $id);
        return view(view: 'posts.show', data: compact(var_name: 'post'));
    }
}

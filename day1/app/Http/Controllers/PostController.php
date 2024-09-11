<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    private $posts = [
        [
            'id' => 1,
            'title' => 'Learn PHP',
            'author' => 'Ahmed',
            'created_at' => '2024-08-22',
        ],
        [
            'id' => 2,
            'title' => 'Solid Principles',
            'author' => 'Mohamed',
            'created_at' => '2024-08-22',
        ],
        [
            'id' => 3,
            'title' => 'Design Patterns',
            'author' => 'Ali',
            'created_at' => '2024-08-22',
        ],
    ];

    public function create()
    {
        return view('posts.create');
    }

    public function index()
    {
        return view('posts.index', ['posts' => $this->posts]);
    }

    public function show($id)
    {
        $post = collect($this->posts)->firstWhere('id', $id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = collect($this->posts)->firstWhere('id', $id);
        return view('posts.edit', ['post' => $post]);
    }
}

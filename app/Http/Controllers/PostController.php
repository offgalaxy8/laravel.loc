<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        //return 'this is page';
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create() {
        return view('post.create');
    }

    public function update() {

        $postsArr = [
            'title' => 'Title from phpstorm 666',
            'content' => 'Some interesting post 666',
            'image' => 'blablabla666.jpg',
            'likes' => '1666',
            'is_published' => '1'
            ];

        $post = Post::find(6);
        $post->update($postsArr);

        dump('updated');
    }

    public function delete() {
        $post = Post::find(5);
        $post->delete();

        dump('deleted');
    }

    public function firstOrCreate() {
//        $post = Post::find(1);

        $anotherPost = [
            'title' => 'Some another new Post',
            'content' => 'Another Some interesting post 666',
            'image' => 'blablabla_new.jpg',
            'likes' => '1452',
            'is_published' => '1'
        ];

        $post = Post::firstOrCreate(
            [
                'title' => 'Some another new Post'
            ],
            [
                'title' => 'Some another new Post',
                'content' => 'Another Some interesting post 666',
                'image' => 'blablabla_new.jpg',
                'likes' => '1452',
                'is_published' => '1'
            ]
        );

        dump($post->content);
        dump('finished');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(POST $post) {
//        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }
}

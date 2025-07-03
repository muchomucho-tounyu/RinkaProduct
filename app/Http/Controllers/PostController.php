<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Work;
use App\Models\Song;
use App\Models\Person;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        dd($posts);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create', [
            'works' => Work::all(),
            'songs' => Song::all(),
            'people' => Person::all(),
        ]);
    }

    public function store(PostRequest $request)
    {
        $input = $request->validated(); // バリデ済みデータを全部取得
        $input['user_id'] = auth()->id();

        if (!$input['user_id']) {
            abort(403, 'ログインしてください');
        }

        $post = new Post();
        $post->fill($input)->save();

        return redirect('/posts/' . $post->id);
    }


    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
            'works' => Work::all(),
            'songs' => Song::all(),
            'people' => Person::all(),
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $data['user_id'] = auth()->id();

        $post->fill($data)->save();

        return redirect('/posts/' . $post->id);
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', '投稿を削除しました');
    }

    // 
}

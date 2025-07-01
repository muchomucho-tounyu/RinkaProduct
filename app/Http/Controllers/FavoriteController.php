<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function toggle(Post $post)
    {
        $user = auth()->user();

        if ($user->favorites()->where('post_id', $post->id)->exists()) {
            $user->favorites()->detach($post->id); // お気に入り解除
        } else {
            $user->favorites()->attach($post->id); // お気に入り登録
        }

        return back();
    } //
}

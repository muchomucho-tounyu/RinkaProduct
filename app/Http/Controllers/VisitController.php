<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function toggle(Post $post)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        if ($user->visits()->where('post_id', $post->id)->exists()) {
            $user->visits()->detach($post->id);
        } else {
            $user->visits()->attach($post->id);
        }

        return back();
    }
    //
}

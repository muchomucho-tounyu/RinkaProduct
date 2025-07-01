<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $post = $user->posts()->latest()->get(); //投稿一覧
        $favorite = $user->favorites()->latest()->get(); //いいね一覧
        $visit = $user->visits()->latest()->get(); //訪れた一覧

        return view('mypage.index', compact('user', 'posts', 'favorites', 'visits'));
    }
    //
}

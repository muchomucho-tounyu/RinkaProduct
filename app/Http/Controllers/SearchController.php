<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;
use App\Models\Song;
use App\Models\Person;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $queryUser = User::query();
        $queryWork = Work::query();
        $querySong = Song::query();
        $queryPerson = Person::query();

        if ($request->filled('user_name')) {
            $user_name = $request->input('user_name');
            $queryUser->where('name', 'like', '%' . $user_name . '%');
        }


        if ($request->filled('work_name')) {
            $work_name = $request->input('work_name');
            $queryWork->where('title', 'like', '%' . $work_name . '%');
        }


        if ($request->filled('song_name')) {
            $song_name = $request->input('song_name');
            $querySong->where('title', 'like', '%' . $song_name . '%');
        }


        if ($request->filled('person_name')) {
            $person_name = $request->input('person_name');
            $queryPerson->where('name', 'like', '%' . $person_name . '%');
        }


        $users = $queryUser->paginate(10);
        $works = $queryWork->paginate(10);
        $songs = $querySong->paginate(10);
        $persons = $queryPerson->paginate(10);

        return view('search.index', compact('users', 'works', 'songs', 'persons'));
    }
}
    //

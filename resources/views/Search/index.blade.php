<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<x-app-layout>
    <x-slot name="header">
        （ヘッダー名）
    </x-slot>

    <body>


        <h1>検索</h1>
        <form action="{{ route('users.index') }}" method="GET">
            <input type="text" name="user_name" placeholder="ユーザー名で検索" value="{{ request('user_name') }}">
            <input type="text" name="work_name" placeholder="作品名で検索" value="{{ request('work_name') }}">
            <input type="text" name="song_name" placeholder="楽曲名で検索" value="{{ request('song_name') }}">
            <input type="text" name="person_name" placeholder="人物名で検索" value="{{ request('person_name') }}">
            <button type="submit">検索</button>
        </form>
        <h2>ユーザー検索結果</h2>
        @foreach ($users as $user)
        <p>{{ $user->name }}</p>
        @endforeach
        {{ $users->links() }}

        <h2>作品検索結果</h2>
        @foreach ($works as $work)
        <p>{{ $work->name }}</p>
        @endforeach
        {{ $works->links() }}

        <h2>楽曲検索結果</h2>
        @foreach ($songs as $song)
        <p>{{ $song->name }}</p>
        @endforeach
        {{ $songs->links() }}

        <h2>人物検索結果</h2>
        @foreach ($persons as $person)
        <p>{{ $person->name }}</p>
        @endforeach
        {{ $persons->links() }}
        <div class="footer">
            <a href="/">戻る</a>
        </div>

    </body>
</x-app-layout>
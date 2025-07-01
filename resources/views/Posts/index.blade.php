<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>Pilgrimage</h1>
    <form action="{{ route('users.index') }}" method="GET">
        <input type="text" name="user_name" placeholder="ユーザー名で検索" value="{{ request('user_name') }}">
        <input type="text" name="work_name" placeholder="作品名で検索" value="{{ request('work_name') }}">
        <input type="text" name="song_name" placeholder="楽曲名で検索" value="{{ request('song_name') }}">
        <input type="text" name="person_name" placeholder="人物名で検索" value="{{ request('person_name') }}">
        <button type="submit">検索</button>
    </form>

    <!-- ユーザー名検索結果 -->
    @foreach ($users as $user)
    <p>{{ $user->name }}</p>
    @endforeach
    {{ $users->links() }}

    <!-- 作品名検索結果 -->
    @foreach ($works as $work)
    <p>{{ $work->title }}</p>
    @endforeach
    {{ $works->links() }}

    <!-- 楽曲名検索結果 -->
    @foreach ($songs as $song)
    <p>{{ $song->title }}</p>
    @endforeach
    {{ $songs->links() }}

    <!-- 人物名検索結果 -->
    @foreach ($persons as $person)
    <p>{{ $person->name }}</p>
    @endforeach
    {{ $persons->links() }}


    <a href='/posts/create'>create</a>

    @foreach($posts as $post)
    <div class='post'>
        {{-- 写真（画像があれば） --}}
        @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="聖地画像" style="max-width: 250px;">
        @endif

        {{-- 作品名 or 楽曲名 --}}
        <h2 class='title'>
            <a href="/posts/{{ $post->id }}">
                @if($post->work)
                {{ $post->work->title }}
                @elseif($post->song)
                {{ $post->song->title }}
                @else
                無題
                @endif
            </a>
        </h2>

        {{-- 場所名 --}}
        <p class='location'>
            {{ $post->location ?? '場所情報なし' }}
        </p>
        <p class='body'>{{ $post->body }}</p>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $post->id }})">delete</button>

        </form>
    </div>
    @endforeach
    </div>
    <div class='paginate'>
        {{$posts->links()}}
    </div>

    <script>
        function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>


</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>投稿一覧</h1>
    <a href="{{ route('search.index') }}">検索ページへ</a>



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
        {{-- 投稿者名 --}}
        <p><strong>投稿者：</strong> {{ $post->user->name }}</p>

        {{-- 人物名（optional） --}}
        <p><strong>登場人物：</strong> {{ $post->person->name ?? '未設定' }}</p>

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
        @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post->work->name ?? $post->song->name ?? 'タイトルなし' }}</h2>
            <!-- いいねボタン -->
            <form action="{{ route('posts.favorite.toggle', $post) }}" method="POST">
                @csrf
                <button type="submit">
                    @auth
                    {{ auth()->user()->favorites->contains($post->id) ? 'お気に入り解除' : 'お気に入り登録' }}
                    @else
                    お気に入り
                    @endauth
                </button>
            </form>
        </div>
        @endforeach

        <a href='/posts/create'>create</a>

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
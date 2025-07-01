<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    @section('content')
    <div class="container">
        <h1>{{ $user->name }}さんのマイページ</h1>

        <h2>自分の投稿</h2>
        <ul>
            @forelse ($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->work->name ?? $post->song->name ?? '投稿' }}</a></li>
            @empty
            <li>投稿はありません</li>
            @endforelse
        </ul>

        <h2>お気に入りした投稿</h2>
        <ul>
            @forelse ($favorites as $favorite)
            <li><a href="{{ route('posts.show', $favorite) }}">{{ $favorite->work->name ?? $favorite->song->name ?? '投稿' }}</a></li>
            @empty
            <li>お気に入りはありません</li>
            @endforelse
        </ul>

        <h2>訪れた投稿</h2>
        <ul>
            @forelse($visits as $visit)
            <li><a href="{{ route('posts.show',$visit) }}">{{$visit->work->name ?? $visit->song->name ?? '投稿' }}</a></li>
            @empty
            <li>visitはありません</li>
            @endforelse
        </ul>

        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            ログアウト
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    @endsection
</body>
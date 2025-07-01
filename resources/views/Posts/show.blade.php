<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>

    @section('content')
    <div class="post-detail">

        {{-- 作品名 or 楽曲名 --}}
        <h1>{{ $post->work->name ?? $post->song->name ?? '無題の投稿' }}</h1>

        {{-- 写真 --}}
        @if ($post->image)
        <div style="margin: 20px 0;">
            <img src="{{ asset('storage/' . $post->image) }}" alt="聖地画像" width="300">
        </div>
        @endif

        {{-- 投稿者名 --}}
        <p><strong>投稿者：</strong> {{ $post->user->name }}</p>

        {{-- 登場人物orアーティスト --}}
        <p><strong>登場人物 / アーティスト</strong> {{ $post->person->name ?? '未設定' }}</p>

        {{-- 場所名 --}}
        <p><strong>場所：</strong> {{ $post->location ?? '場所不明' }}</p>

        {{-- 本文 --}}
        <div>
            <p><strong>本文：</strong></p>
            <p>{{ $post->body }}</p>
        </div>

        {{-- 投稿日 --}}
        <p><strong>投稿日：</strong> {{ $post->created_at->format('Y年m月d日') }}</p>

        {{-- 編集リンク --}}
        <a href="{{ route('posts.edit', $post->id) }}">この投稿を編集する</a>

    </div>
    @endsection

    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>

</html>
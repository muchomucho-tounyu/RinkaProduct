<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1>聖地作成ページ</h1>
    <!--エラーメッセージ-->
    @if ($errors->any())
    <div class="errors" style="color:red; margin-bottom:1em;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- 作品名 -->
        <label for="work_name">作品名：</label>
        <input type="text" name="work_name" value="{{ old('work_name') }}">

        <!-- 楽曲名 -->
        <p>
            <label for="song_name">楽曲名：</label>
            <input type="text" name="song_name" value="{{ old('song_name') }}">
        </p>

        <!-- 場所 -->
        <p>
            <label for="location">住所：</label>
            <input type="text" name="location" value="{{ old('location') }}">
        </p>

        <!-- 写真 -->
        <p>
            <label for="image">写真：</label>
            <input type="file" name="image">
        </p>

        <!-- 本文 -->
        <p>
            <label for="body">コメント：</label>
            <textarea name="body">{{ old('body') }}</textarea>
        </p>

        <button type="submit">投稿する</button>
    </form>

    <br>

    <div class="footer">
        <a href="/">戻る</a>
    </div>

</body>

</html>
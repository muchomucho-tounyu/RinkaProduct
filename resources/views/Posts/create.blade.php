<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1>Blog Name</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- 作品名 --}}
        <label for="work_id">作品：</label>
        <select name="work_id">
            <option value="">選択してください</option>
            @foreach($works as $work)
            <option value="{{ $work->id }}">{{ $work->name }}</option>
            @endforeach
        </select>

        {{-- 楽曲名 --}}
        <label for="song_id">楽曲：</label>
        <select name="song_id">
            <option value="">選択してください</option>
            @foreach($songs as $song)
            <option value="{{ $song->id }}">{{ $song->name }}</option>
            @endforeach
        </select>

        {{-- 場所 --}}
        <label for="location">場所名：</label>
        <input type="text" name="location" value="{{ old('location') }}">

        {{-- 写真 --}}
        <label for="image">写真：</label>
        <input type="file" name="image">

        {{-- 本文 --}}
        <label for="body">コメント：</label>
        <textarea name="body">{{ old('body') }}</textarea>

        <button type="submit">投稿する</button>
    </form>

</body>

</html>
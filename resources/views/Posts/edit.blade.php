<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1 class="title">編集画面</h1>

    <div class="content">

        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <p><strong>投稿者：</strong> {{ $post->user->name }}</p>


            {{-- 作品 --}}
            <select name="work_id">
                <option value="">選択してください</option>
                @foreach($works as $work)
                <option value="{{ $work->id }}" @if($post->work_id == $work->id) selected @endif>{{ $work->name }}</option>
                @endforeach
            </select>

            {{-- 楽曲 --}}
            <select name="song_id">
                <option value="">選択してください</option>
                @foreach($songs as $song)
                <option value="{{ $song->id }}" @if($post->song_id == $song->id) selected @endif>{{ $song->name }}</option>
                @endforeach
            </select>

            <label for="person_id">登場人物 / アーティスト</label>
            <select name="person_id">
                <option value="">未設定</option>
                @foreach($people as $person)
                <option value="{{ $person->id }}"
                    @if(old('person_id', $post->person_id ?? '') == $person->id) selected @endif>
                    {{ $person->name }}
                </option>
                @endforeach
            </select>


            {{-- 場所 --}}
            <input type="text" name="location" value="{{ old('location', $post->location) }}">

            {{-- 画像（再アップロードは任意） --}}
            <input type="file" name="image">

            {{-- 本文 --}}
            <textarea name="body">{{ old('body', $post->body) }}</textarea>

            <button type="submit">更新する</button>
        </form>
    </div>
</body>
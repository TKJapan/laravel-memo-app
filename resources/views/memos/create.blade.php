<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ登録</title>
</head>
<body>
    <h1>メモ登録</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/memos/store') }}" method="post">
        @csrf
        <label for="content">メモ内容:</label>
        <input type="text" name="content" id="content" required>
        <button type="submit">登録</button>
    </form>

    <a href="{{ url('/memos') }}">メモ一覧へ戻る</a>
</body>
</html>

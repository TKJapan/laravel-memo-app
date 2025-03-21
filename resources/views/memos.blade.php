<!-- resources/views/memos.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">📌 メモ一覧</h2>
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>削除</th>
                    <th>内容</th>
                    <th>作成日</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($memos as $memo)
                <tr>
                    <td>{{ $memo->id }}</td>
                    <td>
                        <form action="{{ route('memos.destroy', $memo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary" onclick="return confirm('本当に削除しますか？');">削除</button>
                    </form>
                    </td>
                    <td>{{ $memo->content }}</td>
                    <td>{{ $memo->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/memos/create') }}">メモを追加</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

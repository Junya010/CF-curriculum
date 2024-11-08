<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>カレンダーイベント</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>イベントの追加</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/events" method="POST">
        @csrf
        <input type="text" name="title" placeholder="イベント名" required>
        <textarea name="description" placeholder="説明"></textarea>
        <input type="datetime-local" name="start_time" required>
        <input type="datetime-local" name="end_time" required>
        <button type="submit">追加</button>
    </form>

    <h2>イベント一覧</h2>
    <ul id="eventList">
        @foreach($events as $event)
            <li>{{ $event->title }}: {{ $event->start_time }} から {{ $event->end_time }}</li>
        @endforeach
    </ul>

    <script>
        $(document).ready(function() {
            // AJAXリクエストの設定
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // フォーム送信時の処理
            $('#eventForm').on('submit', function(event) {
                event.preventDefault(); // デフォルトのフォーム送信を防ぐ

                // フォームデータを取得
                var formData = $(this).serialize();

                // AJAXリクエスト
                $.ajax({
                    url: '/events', // POSTリクエスト先のURL
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        // 成功時の処理
                        $('#eventList').append('<li>' + response.title + ': ' + response.start_time + ' から ' + response.end_time + '</li>');
                        $('#eventForm')[0].reset(); // フォームをリセット
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // エラー時の処理
                        console.error('Error: ', textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
</body>
</html>

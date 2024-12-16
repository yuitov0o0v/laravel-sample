<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'デフォルトタイトル')</title>
</head>
<body>
    <header>
        <!-- 共通ヘッダー -->
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- 共通フッター -->
    </footer>
</body>
</html>

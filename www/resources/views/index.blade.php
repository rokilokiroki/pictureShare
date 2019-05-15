<!doctype html>
<html lang="ja">
{{-- これはvueComponent表示のために必要 --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>pictureShare</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

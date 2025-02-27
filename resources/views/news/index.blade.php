<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <style>
    body { font-family: Arial, sans-serif; }
    .menu { margin-bottom: 20px; }
    .menu a { margin-right: 15px; text-decoration: none; color: blue; }
    .news-item { margin-bottom: 20px; padding: 10px; border-bottom: 1px solid}
    .news-title { font-size: 20px; font-weight: bold; }
    .news-content { margin-top: 5px; }
    </style>
</head>
<body>
    <h1>Danh sách tin tức</h1>

    <div class="menu">
        <a href="#tin-tuc-1">Tin tức 1</a>
        <a href="#tin-tuc-2">Tin tức 2</a>
        <a href="#tin-tuc-3">Tin tức 3</a>
        <a href="#tin-tuc-4">Tin tức 4</a>
    </div>

    @foreach ($news as $item)
    <div class="news-item">
        <div class="news-title">{{ $item->tittle }}</div>
        <div class="news-content">{{ $item->content }}</div>
    </div>
    @endforeach
</body>
</html>
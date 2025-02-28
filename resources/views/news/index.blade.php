<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <style>
    body { font-family: Arial, sans-serif; }
    .Category {
        margin:1px;
        border: 1px solid black;
        width: 300px;
    }
    .menu { margin-bottom: 20px;margin-left:30px }
    .menu a { 
        display: inline-block;
        margin-right: 15px; 
        text-decoration: none; 
        color: black; 
    }
    .menu a:hover{
        font-weight: bolder;
    }
    .news-item { margin-bottom: 20px; padding: 10px; border-bottom: 1px solid}
    .news-title { font-size: 20px; font-weight: bold; }
    .news-content { margin-top: 5px; }
    </style>
</head>
<body>
    <h1>Danh sách tin tức</h1>
    <div class="Category">
        <p style="color:blue;font-weight:bold;font-size:25px">Danh mục các tin tức
        @foreach ($category as $item)
        <div class="menu">
            <a href="">{{ $item->title }}</a>
        </div>
        @endforeach
    </div>
    @foreach ($news as $item)
    <div class="news-item">
        <div class="news-title">{{ $item->tittle }}</div>
        <div class="news-content">{{ $item->content }}</div>
    </div>
    @endforeach
</body>
</html>
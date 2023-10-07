<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--詳細画面 -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>brewery</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="post">
            {{ $post->name }}
        </h1>
        <div class="content">
            <div class="content__post">
                <p class='area'>{{ $post->area }}</p>
                <p class='rice'>{{ $post->rice }}</p>
                <p class='flavor'>{{ $post->flavor }}</p>
                <p class='taste'>{{ $post->taste }}</p>
                <p class='alcholcontent'>{{ $post->alcholcontent }}</p>
                <h3 class='match'>{{ $post->match }}</h3>   
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html><!--詳細画面 -->
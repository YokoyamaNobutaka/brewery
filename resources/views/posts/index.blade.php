<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!-- 一覧スタート画面 -->
    <head>
        <meta charset="utf-8">
        <title>brewery</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>brewery</h1>
        <a href='/posts/create'>投稿</a><!--投稿画面へ飛ぶルーティングcreate.blade.php-->
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'><!-- 各日本酒の情報を表示 -->
                    <h2 class='name'><!-- 記事詳細画面に行くためのリンクを日本酒名：nameに付与各ID名に飛ぶ-->
                        <a href="/posts/{{ $post->id }}">{{ $post->name }}</a>
                    </h2>
                    <p class='area'>{{ $post->area }}</p>
                    <p class='rice'>{{ $post->rice }}</p>
                    <p class='flavor'>{{ $post->flavor }}</p>
                    <p class='taste'>{{ $post->taste }}</p>
                    <p class='alcholcontent'>{{ $post->alcholcontent }}</p>
                    <h3 class='match'>{{ $post->match }}</h3>
                </div>
            @endforeach
        </div>
    </body>
</html><!-- 一覧スタート画面 -->
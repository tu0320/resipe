<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レシピ閲覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <style>
            p{
                text-align:center;
            }
        </style>
         <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="image">
            <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
        </div>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
         <div class="footer">
        <a href="/">戻る</a>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link href="{{secure_asset('/css/style.css')}}" rel="stylesheet">
    </head>
       
    <body class="antialiased">
        @include('layouts.navber')
            <div class='posts'>
                 @foreach ($posts as $post)
                    
                    <div class='post'>
                        <p class='title'>{{ $post->title}}</p>
                        <a href="/posts/{{$post->id }}"><img src="{{ $post->image_url }}" class="sample" alt="画像が読み込めません。"></a>
                    </div>
                @endforeach
            </div>
        <div class='paginate'>{{ $posts->links()}}</div>
    </body>
</html>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link href="{{secure_asset('/css/style.css')}}" rel="stylesheet">
    </head>
         <body>
              @include('layouts.navber')
              
            <form action="/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="title">
                    <h2>レシピ名</h2>
                    <input type="text" name="post[title]" placeholder="（例）照り焼きチキン" value="{{ old('post.title') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="body">
                    <h2>レシピの紹介文</h2>
                    <textarea name="post[body]" placeholder="（例）覚えやすくて、誰でも簡単に作れる！">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <div class="image">
                    <input type="file" name="image">
                </div>
                <div class="back">[<a href="/">back</a>]</div>
                
                <div class='ingredients'>
                <p>材料</p>
                    @foreach($ingredients as $ingredient)
                
                <input type="checkbox" name="ingredient[]" value="{{ $ingredient->id}}"> 
                <label for="ingredient_id">{{$ingredient->name}}</label>
                    @endforeach
                
                <button type="submit">投稿する</button>
                </div>
                
            </form>
            
           
        </body>
</html>
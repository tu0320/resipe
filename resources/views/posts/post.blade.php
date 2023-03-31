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
                    <input type="text" class="text" name="post[title]" placeholder="（例）照り焼きチキン  " value="{{ old('post.title') }}"/>
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
                <div id="ingredients-box">
                  <div class="ingredients">
                    <select name="ingredient[name][]">
                      @foreach($ingredients as $ingredient)
                      <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                      @endforeach
                    </select>
                    <input type="text" name="ingredient[quantity][]" placeholder="グラム数">
                  </div>
                </div>
                <button id="add-form">食材を追加＋</button>
                
                <script>
                  const addButton = document.getElementById('add-form');
                  const ingredientsBox = document.getElementById('ingredients-box');
                
                  addButton.addEventListener('click', (event) => {
                    event.preventDefault();
                    const ingredients = document.createElement('div');
                    ingredients.classList.add('ingredients');
                
                    const select = document.createElement('select');
                    select.setAttribute('name', 'ingredient[name][]');
                
                    @foreach($ingredients as $ingredient)
                    const option{{ $ingredient->id }} = document.createElement('option');
                    option{{ $ingredient->id }}.setAttribute('value', '{{ $ingredient->id }}');
                    option{{ $ingredient->id }}.textContent = '{{ $ingredient->name }}';
                    select.appendChild(option{{ $ingredient->id }});
                    @endforeach
                
                    const input = document.createElement('input');
                    input.setAttribute('type', 'text');
                    input.setAttribute('name', 'ingredient[quantity][]');
                    input.setAttribute('placeholder', 'グラム数');
                
                    ingredients.appendChild(select);
                    ingredients.appendChild(input);
                
                    ingredientsBox.appendChild(ingredients);
                  });
                </script>

                <button  class="submit" type="submit">投稿する</button>
                <div class="back">[<a href="/">back</a>]</div>
                
            </form>
            
           
        </body>
</html>
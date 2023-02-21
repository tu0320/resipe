<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Auth;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function post()
    {
        return view('posts/post');
    }
    
    public function store(Request $request, Post $post)
    {
        //ログインしているユーザーIDを取得
        $post->user_id = $request->user()->id;
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/');
    }
    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\Image;

use Illuminate\Support\Facades\DB;

use Auth;

use Cloudinary;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function show(Post $post)
    {
        return view('posts/resipe')->with(['post' => $post]);
    }
    
    public function post()
    {
        $ingredients = DB::table('ingredients')->get();
        return view('posts/post',compact('ingredients'));
    }
    
    public function store(Request $request, Post $post, Image $image)
    {
        
        //ログインしているユーザーIDを取得
        $post->user_id = $request->user()->id;
        $input = $request['post'];
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url= Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        $post->fill($input)->save();
        $post->syncIngredients($request->input('ingredient.name'),$request->input('ingredient.quantity'));
        
        return redirect('/');
    }
    
    public function view()
    {
        return view('link');
    }
    //後で消す
    public function navber()
    {
        return view('layouts/navber');
    }
    public function math()
    {
        $grams = DB::table('ingredient_post') ->select(DB::raw(quantity)) ->get();
    }
}
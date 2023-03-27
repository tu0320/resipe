<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

class ImageController extends Controller
{
    
    public function upload(Request $request)
    {
        // ディレクトリ名
        $dir = 'sample';

        // sampleディレクトリに画像を保存
        $request->file('image')->store('public/' . $dir,);
        
        // ファイル情報をDBに保存
        $image = new Image();
        $image->image_path='storage/';
        $image->save();
        

        return redirect('/post');
    }
}
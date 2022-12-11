<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show() 
    {
        $post = Post::first();
        echo '新增文章後設資料' . PHP_EOL;
        $post->setMeta([
            'hide' => true,
            'color' => '#000',
            'likes' => 30,
        ]);
        echo '文章 Eloquent 模型是否有被更改：' . ($post->isMetaDirty() ? '是' : '否') . PHP_EOL;
        echo '文章 Eloquent 進行儲存' . PHP_EOL;
        $post->save();
        echo '文章 Eloquent 模型是否有被更改：' . ($post->isMetaDirty() ? '是' : '否') . PHP_EOL;
    }
}

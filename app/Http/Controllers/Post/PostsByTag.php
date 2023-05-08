<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class PostsByTag extends Controller
{
    public function __invoke(Tag $tag){
        $posts = $tag->posts;
        return view('post.byTag', compact('posts', 'tag'));
    }
}

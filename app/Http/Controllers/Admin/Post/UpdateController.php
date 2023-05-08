<?php

namespace App\Http\Controllers\Admin\Post;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post){
        $data = $request->validated();
        //dd($data);
        $this->service->update($post, $data);
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
}

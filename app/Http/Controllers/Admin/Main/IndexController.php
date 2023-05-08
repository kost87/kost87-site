<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $data = [];
        $data['usersCount'] = $usersCount = User::all()->count();
        $data['postsCount'] = $postsCount = Post::all()->count();
        $data['categoriesCount'] = $categoriesCount = Category::all()->count();
        $data['tagsCount'] = $tagsCount = Tag::all()->count();
        return view('admin.main.index', compact('data'));
    }
}

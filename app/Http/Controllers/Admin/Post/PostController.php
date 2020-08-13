<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $data['posts'] = Post::with('user', 'category')
                                ->where('status', Post::PUBLISHED_STATUS)
                                ->latest()
                                ->get();
        return view('admin.pages.post.index', $data);
    }
}

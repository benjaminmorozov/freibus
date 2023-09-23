<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use App\Models\Tour;

class HomeController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()
            ->orderBy('published_at', 'desc')
            ->paginate(2);
        $tours = Tour::query()
            ->orderBy('date', 'desc')
            ->paginate(2);
        return view('home', compact('posts', 'tours'));
    }
}

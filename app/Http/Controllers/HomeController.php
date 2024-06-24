<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Seller;
use App\Models\Post;
use Log;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(auth()->id());
        //$user = Auth::user();

        $posts = $user->posts()->get();
        $event = $user->events()->get();

        $posts = $posts->sortByDesc('created_at')->values()->all();
        foreach ($posts as $post) {
            $post->author;
            $post->author->image = $post->author->image_path ? asset($post->author->image_path) : asset('profile_placeholder.jpg');
        }

        return view('home', compact(["user", "posts", "events"]));

    }
}

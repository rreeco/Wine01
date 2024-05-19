<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // mock datas
        $posts = [[
                "id" => "1",
                "content" => "First post @1 is tagged",
                "likes" => [
                    "1",
                    "2"
                ],
                "user_id" => "3",
                "comments" => [
                    [
                        "user_id" => "1",
                        "content" => "Comment 1"
                    ],
                    [
                        "user_id" => "2",
                        "content" => "Comment 2"
                    ]
                ]
            ], [
                "id" => "2",
                "content" => "Second post @2 is tagged",
                "likes" => [
                    "1",
                    "2"
                ],
                "user_id" => "3",
                "comments" => [
                    [
                        "user_id" => "1",
                        "content" => "Comment 1"
                    ],
                    [
                        "user_id" => "2",
                        "content" => "Comment 2"
                    ]
                ]
            ], [
                "id" => "3",
                "content" => "Third post @1 is tagged",
                "likes" => [
                    "1",
                    "3"
                ],
                "user_id" => "2",
                "comments" => [
                    [
                        "user_id" => "1",
                        "content" => "Comment 1"
                    ],
                    [
                        "user_id" => "3",
                        "content" => "Comment 2"
                    ]
                ]
            ]
        ];

        $user = Auth::user();

        return view('home', compact(["user", "posts"]));
    }
}

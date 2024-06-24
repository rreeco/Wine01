<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index', ['user' => $request->user()]);
    }

    public function search(Request $request, $qry)
    {
        $users = User::where('name', 'like', '%'.$qry.'%')
            ->orWhere('surname', 'like', '%'.$qry.'%')->get();
        foreach ($users as $user) {
            $user->image = $user->image_path ? asset($user->image_path) : asset('profile_placeholder.jpg');
        }

        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        $posts = $user->posts()->orderByDesc('created_at')->get();
        foreach ($posts as $post) {
            $post->author;
            $post->author->image = $post->author->image_path ? asset($post->author->image_path) : asset('profile_placeholder.jpg');
            $post->likes = [];
        }

        $events = $user->events()->orderByDesc('created_at')->get();
        foreach ($events as $event) {
            $event->author;
            $event->author->image = $event->author->image_path ? asset($event->author->image_path) : asset('profile_placeholder.jpg');
            $event->image = $event->image_path ? asset($event->image_path) : null;
        }

        $wines = [];
        if ($user->isWinery()) {
            $wines = $user->wines()->get();
            foreach ($wines as $wine) {
                $wine->producer;
                $wine->producer->image = $wine->producer->image_path ? asset($wine->producer->image_path) : asset('profile_placeholder.jpg');
                $wine->image = $wine->image_path ? asset($wine->image_path) : null;
            }
        }

        $user->image = $user->image_path ? asset($user->image_path) : null;

        $user->is_followed = false;
        foreach ($user->follower_users as $follower_user) {
            if ($follower_user->id == auth()->id()) {
                $user->is_followed = true;
                break;
            }
        }
        
        return view('users.show', [
            'user' => $user,
            'posts' => $posts,
            'events' => $events,
            'wines' => $wines
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', [ 'user' => $user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::find($id);
            Log::info($user);

            $input = $request->all();

            if($request->hasFile('image')) {
                $file_name = $id.'_'.$request->image->getClientOriginalName();
                $file_path = $request->file('image')->storeAs('profile_images', $file_name, 'public');

                $input['image_path'] = '/storage/' . $file_path;
            }

            $user->update($input);

            return redirect()->route('users.show', $id);
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return redirect()->route('users.edit', $id)->withInput()->withErrors($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

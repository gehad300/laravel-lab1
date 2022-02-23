<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        //select data based on passed parameter
        // $posts->append($request->all());
        return view('posts.index', [
            'posts' =>
            $posts
        ]);
    }
    public function create()
    {
        //select *from posts where id=5;
        //query users table in create action that render create forn to full data
        $users = user::all();
        //    dd($users);
        //all cause i want to get all user
        return view('posts.create', ['users' => $users]);
    }
    public function store()
    {
        $requestdata = request()->all();

        //  dd($requestdata);
        //requestdata =>array
        //todo
        //store request data
        //query=post=>which means
        //create method store in database
        // post::create([
        //array take column name and value to add in this column
        // 'title'=>$requestdata['title'],
        //title parameter here comes here from form name
        // 'description'=>$requestdata['description'],
        //should put every column in fillable
        //  ] );
        post::create($requestdata);
        //redirection to posts.index
        return redirect()->route('posts.index');
        //elquent=model
    }
    public function show($postId)
    {
        $post = Post::find($postId);
        //change date style
        $date = Carbon::parse($post->created_at)->format('l jS \of F Y h:i:s A');
        return view('posts.show', [
            'post' => $post,
            'date' => $date,
        ]);
    }
    public function edit($postId)
    {
        return view('posts.edit', [
            'post' => Post::find($postId),
            'users' => User::all(),
        ]);
    }
    public function update(Request $request, $postId)
    {
        // @dd($request->all());
        Post::where('id', $postId)->update([
            'title' => $request->all()['title'],
            'description' => $request->all()['description'],
            'user_id' => $request->all()['post_creator'],
        ]);
        return redirect()->route('posts.index');
    }

    public function destroy($postID)
    {
        Post::where('id', $postID)->delete();

        return redirect()->route('posts.index');
    }
}
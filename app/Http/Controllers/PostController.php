<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'First Post', 'posted_by' => 'Ahmed', 'created_at' => '2002-02-19 10:00:00'],
            ['id' => 2, 'title' => 'second Post', 'posted_by' => 'Mohamed', 'created_at' => '2002-02-15 10:00:00']

        ];
        //   dd($posts);
        //die dump will dump any value you give to it and stop execution
        return view('posts.index', [
            'posts' => $posts,

            //here post=>posts is a second paramete which is data i passed to call back function that i will write view name in the route instead of call back function
            //view name called posts
            // i will make return here thenc put it as uri in route
            //index is an action will list resouces
            //index is action name and also i should put it instead of call back function //verb here is get is the type of request that i will do on action for resouces is get
            //uri is name of view that i will wite it on url to display controller page
            // icannot access anything without route so for ex:/posts is a view file

        ]);
    }
    public function create()
    {

        return view('posts.create');
    }
    public function store()
    {
        //fetch request data
        //store request data in do
        //redirection to posts.index
        // $requestdata=request()->all();
        //request global helper method //returrn object i can access from it prpbperties and method
        // dd($requestdata);
        // return '';
        //how to get input data
        // return to_route('posts.index');
        return redirect()->route('posts.index');
        //here this is istead of view to redirect to another page



    }

    public function show($postId)
    {
        $post = $this->getPost($postId);
        return  view('posts.show', ['post' => $post]);
    }

    public function edit($postid)
    {
        $post = $this->getPost($postid);
        return  view('posts.edit', ['post' => $post]);
    }

    public function update()
    {

        return redirect()->route('posts.index');
    }
    public function delete()
    {
        return redirect()->route('posts.index');
    }

    public function getPosts()
    {
        //FUNCTION TO RETREIVE ASSOCIATIVE ARRAY
        return
            [
                ['id' => 1, 'title' => 'first post', 'description' => 'first post describtion', 'posted_by' => 'gehad', 'email' => 'gehad@gmail.com', 'created_at' => '2022-02-20 5:00:00'],
                ['id' => 2, 'title' => 'second post', 'description' => 'second post describtion', 'posted_by' => 'ahmed', 'email' => 'Ahmed@gmail.com', 'created_at' => '2022-02-20 10:00:30'],
            ];
    }

    public function getPost($id)
    {
        $posts = $this->getPosts();
        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
            //FUNCTION TO LOOP  TO ARRAY AND RETURN ID
        }
        return null;
    }

    //here this is controller to view posts
    //any table in the system called resources
    //and it implement operations
}
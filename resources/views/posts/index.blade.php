@extends('layout.app')
@section('content')
@section('title')
    index
@endsection
{{-- //yield is a directive in parent is like call section that have the same name as yield and put the content here --}}
<div class="text-center mt-5">
    <a href="{{ route('posts.create') }}" class="btn btn-success ">Create Post</a>
    {{-- helper method will take alias name instead of url --}}
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">
            <th scope="col">title</th>
            <th scope="col">posted by</th>
            <th scope="col">created at</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>
        {{-- //here looping for posts --}}
        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post['id'] }}</th>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['created_at'] }}</td>
                <td><a href="{{ route('posts.show', $post['id'])}}" class="btn btn-info">View</a></td>
                <td> <a href="{{ route('posts.edit', $post['id'])}}" class="btn btn-info">Edit</a></td>
                <td><a href="#" class="btn btn-danger">delete</a></td>


            </tr>
        @endforeach

        {{-- //here i should put mustache templete to take post['id'] not string
{{--  //what is inside anchor tag should equale uri inside route --}}
    </tbody>
</table>
@endsection

@extends('layout.app')

@section('title') Edit @endsection

@section('content')
<form method="POST" action="{{route('posts.update', ['post' => $post['id']])}}" class="mt-5">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="titleInput" class="form-label">Title</label>
        <input name="title" type="text" value="{{$post['title']}}" class="form-control" id="titleInput"
            aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="descriptionInput" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="descriptionInput">{{$post['description']}}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Post Creator</label>
        <select name="post_creator" class="form-control">
            <option disabled>Creator</option>
            <option value=" {{$post['posted_by'] == "gehad" ? "selected" : "" }} ">gehad</option>
            <option value=" {{$post['posted_by'] =="ahmed" ? "selected" : "" }} ">ahmed</option>

        </select>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection

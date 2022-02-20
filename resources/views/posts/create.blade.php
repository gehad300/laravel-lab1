@extends('layout.app')
@section('title')create @endsection
@section('content')
    <form class="mt-5" method="POST" action="{{route('posts.store')}}">
    {{--  //any submisiion from post ,put,delete you should put directrive called     @csrf          @csrf  --}}

        <div class="mb-3">
            @csrf
            {{--  //protect you through not let you go to another page without submit  --}}
          <label for="exampleInputEmail1" class="form-label"> Title</label>
          <input  name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Description</label>
            <textarea  name="description" class="form-control"></textarea>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> post creator</label>
           <select name="posts_creator" class="form-control">
               <option value="1">Gehad</option>
               <option value="2">Ahmed</option>

           </select>
          </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
@endsection

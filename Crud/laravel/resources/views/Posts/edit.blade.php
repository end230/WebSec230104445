@extends('layouts.app')

@section('content')

@section('title')edit @endsection


<form method="POST" action="{{route('posts.update',$post->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" value="{{$post->title}}" name="title" class="form-control" id="exampleFormControlInput1" placeholder="...">
    </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$post->description}}</textarea>
  </div>
<div>
  <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
  <select name="post_Creator" claas="form-control">
      @foreach ($users as $user )
      <option value='{{$user->id}}'>{{$user->name}}</option>
      @endforeach
  </select>
  <br>

<button  class="btn btn-primary">Update</button>

</div>


</form>
@endsection
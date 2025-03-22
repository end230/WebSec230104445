@extends('layouts.app')

@section('content')

@section('title')create @endsection

<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="...">
    </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<div>
  <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
  <select name="post_Creator" claas="form-control">
        <option value="1">Ahmed</option>
        <option value="1">Mohamed</option>
  </select>
  <br>

<button  class="btn btn-success">Submit</button>

</div>


</form>


@endsection
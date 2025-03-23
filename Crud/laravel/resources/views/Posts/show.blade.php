@extends('layouts.app')

@section('content')

@section('title')show @endsection
      <div class="card">
        <div class="card-header">
          Post Info
        </div>
        <div class="card-body">
          <h5 class="card-title">Title {{$post->title}}</h5>
          <p class="card-text">Description:{{$post['Description']}}</p>
        </div>
        <div class="card">
            <div class="card-header">
              Post Creator Info
            </div>
            <div class="card-body">
              <h5 class="card-title">Name {{$post['Posted_by']}}</h5>
              <p class="card-text">Email: ahmed@gmail.com</p>
              <p class="card-text">Created At:{{$post['Created_at']}}</p>
            </div>
      </div>
    
@endsection
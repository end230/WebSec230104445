@extends('layouts.app')

@section('content')

@section('title')show @endsection
      <div class="card">
        <div class="card-header">
          Post Info
        </div>
        <div class="card-body">
          <h5 class="card-title">Title: {{$post->title}}</h5>
          <p class="card-text">Description:{{$post['Description']}}</p>
        </div>
        <div class="card">
            <div class="card-header">
              Post Creator Info
            </div>
            <div class="card-body">
              <h5 class="card-title">Name {{$post->user->name}}</h5>
              <p class="card-text">Email: {{$post->user->email}}</p>
              <p class="card-text">Created At: {{$post->created_at}}</p>
            </div>
      </div>
    
@endsection
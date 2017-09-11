@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>
      {{$post->title}}
    </h1>
    {{$post->body}}

    <hr>
    <div class="comments">
      <ul class="list-group">
      @foreach($post->comments as $comment)
      <li class="list-group-item">
        <strong>
          {{$comment->created_at->diffForHumans()}}: &nbsp;
        </strong>
        {{$comment->body}}
      </li>
      @endforeach
      </ul>
    </div>


    <div class="card">
      <div class="card-block">
        <form method="POST" action="/posts/{{$post->id}}/comments/">
          {{ csrf_field() }}
          
          <div class="form-group">
            <input type="hidden" value="0" name="user_id">
            <textarea name="body" id="" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <button class="btn btn-primary" type="submit">Add comment</button>
          </div>
        </form>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
@endsection
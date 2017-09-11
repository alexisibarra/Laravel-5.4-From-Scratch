@extends ('layouts.master')

@section('content') 



<div class="album text-muted">
  <div class="container">
    <div class="row">
      @foreach($posts as $post)
      <div class="card">
        <h3>
          <a href="/posts/{{$post->id}}">
            {{ $post->title}} 
          </a>
        </h3>
        <p class="card-text">
          {{$post->body}}
        </p>
        <span>{{$post->created_at->diffForHumans()}}</span>
      </div>
      @endforeach
    </div>

  </div>
</div>

@endsection
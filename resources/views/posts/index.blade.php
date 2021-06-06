@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
        

          <div class="panel panel-default">
            @if(session('error'))       

            <div class="alert alert-danger" role="alert">
              <strong>{{session('error')}}</strong> 
          </div>            
            @endif

            @if(session('success'))        

            <div class="alert alert-success" role="alert">
              <strong>{{session('success')}}</strong> 
          </div>            
            @endif

              <div class="panel-heading">All Posts
                &nbsp;
                &nbsp;
                
                <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
              </div>
              
              <div class="panel-body">                  
                  @if(count($posts) > 0)
                  @foreach($posts as $post)
                      <h2><a href="/posts/{{$post->id}}">{{ $post->title}}</a></h2>
                      <h3>{{$post->body}}</h3>
                      <small>Written {{$post->created_at->diffForHumans()}}</small>
                                                      
                      <hr>
                  @endforeach                  
                @else
                    <p>No Posts Found</p>
                @endif

              </div>
          </div>
      </div>
  </div>
</div>
    

@endsection
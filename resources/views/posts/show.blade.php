@extends('layouts.app')

@section('content')
<div><a class="btn btn-primary pull-left" href="{{route('posts.index')}}">Back to Posts</a></div>

<div class="container">  
  <div class="row">   
      <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">            
              <div class="panel-heading">{{ $post->title}}</div>
              <div class="panel-body">                        
                      <h3>{{$post->body}}</h3>
                      <small>Written {{$post->created_at->diffForHumans()}} </small>
                      
                      <input type="hidden" name="id" required="" value="{{ $post->id }}">                       
                      <hr>         
                                           
                              <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                <a class="btn btn-success" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                                &nbsp;
                                @csrf
                                @method('DELETE')          
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>   
                           
                    
                                        
                        <hr>

                      
              </div>
          </div>
      </div>
  </div>
</div>

    

@endsection
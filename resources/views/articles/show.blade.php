@extends('layouts.app')

@section('content')
   
    
        <div>  
            <h1>{{$article->title}}</h1>
            <h4>{{$article->owner->name}}</h4>
            </p>{{$article->content}}</p>
        
        </div>

        @guest    
           
        @else
            <div>
                <a href="/articles/{{$article->id}}/edit">Edit</a>
            </div>
        @endguest
       
        @foreach($article->comments as $comment)
            <div style=" width: 90%;padding: 10px;border: 1px solid gray;margin: 10px;">
                <p>{{$comment->content}}</p>
                <li>{{$comment->owner->name}}</li>
            </div>
        @endforeach

        @guest
            <div style=" width: 50%;padding: 10px;border: 1px solid gray;margin: 10px;">
                <p>Please log-in to leave a comment.</p>
            </div>    

        @else
            <div style=" width: 50%;padding: 10px;border: 1px solid gray;margin: 10px;">
                <form method="POST" action="/articles/{{$article->id}}/comments">
                    @csrf
                    <p>Add a comment</p>
                    
                    <textarea name="commentContent" style="width:100%; height:50px"></textarea>
                    <button type="submit" style="height=20px; width:30%">Add Comment</button>
                </form>
                @include('errors')

            </div>
        @endguest
       
   
@endsection
@extends('layouts.app')

@section('content')
    <h1>ARTICLES</h1>
    @foreach($articles as $article)
        <div>  
            <h3>
                <a href="/articles/{{$article->id}}">
                    {{$article->title}}
                </a>
            </h3>
            <p>{{$article->owner->name}}</p>
            </p>{{$article->content}}</p>
        
        </div>
    @endforeach

    @guest
        </div>
            <p>Sign-in to publish an article.</p>
        </div>
    @else
        <div>
            <p>Publish new article <a href="/articles/create">here</a></p>
        </div>
    @endguest
@endsection
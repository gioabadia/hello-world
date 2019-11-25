@extends('layouts.app')

@section('content')
    <h1>EDIT ARTICLE</h1>
    <form method="POST" action="\articles\{{$article->id}}">
        @method('PATCH')
        @csrf

        <div>
            <input type="text" name="title" value="{{$article->title}}">
        </div>

        <div>
            <textarea name="content" placeholder="Enter Article Content">{{$article->content}}</textarea>
        </div>

        <div>
            <button type="submit">Save Changes</button>
        </div>
    </form>
    <form method="POST" action="/articles/{{$article->id}}">
        @method('DELETE')
        @csrf
        <div>
            <button type="submit">Delete Article</button>
        </div>
    </form>

    @include('errors')



@endsection
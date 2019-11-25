@extends('layouts.app')

@section('content')
    <h1>CREATE NEW ARTICLE</h1>
    <form method="POST" action="\articles">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Enter Article Title">
        </div>

        <div>
            <textarea name="content" placeholder="Enter Article Content"></textarea>
        </div>

        <div>
            <button type="submit">Create Article</button>
        </div>

        @include('errors')


@endsection
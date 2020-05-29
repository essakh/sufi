@extends('layouts.app')

@section('content')
    @if(count($articles) > 0)
        @foreach($articles as $article)
            <div class="well">
                <h3>{{$article->title}}</h3>
            </div>
        @endforeach
    @else
        <p> No posts found</p>
    @endif 



@endsection
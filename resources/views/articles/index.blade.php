@extends('layout')

@section('content')


<div id="wrapper">
    <div id="page" class="container">
        @forelse ($articles as $article)
        <div class="title">
            <h2>
            <a href="{{ route('articles.show',$article)}}">{{ $article->title}}</a>
            </h2>
        </div>


        {{$article->excerpt}}

        <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

        @empty
        <p>No articles with this tag.</p>

        @endforelse

    </div>
</div>

@endsection

@extends('layouts.temp')

@section('content1')

<div class="blog">


    <ul class="list-group">
        @foreach ($posts as $post )
        <li class="list-group-item bg-gradient-dark ">
            <a href="/news/{{ $post->id }}"><h2>{{ $post["title"] }}</h2></a>
            <h5>Sumber : {{ $post["authors"] }}</h5>
            <p>{{ $post["excerpt"] }}</p>
        </li>
        @endforeach
       
      </ul>
      

</div>

@endsection 



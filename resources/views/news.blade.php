
@extends('layouts.temp')

@section('content1')

<div class="blog">

    <h2>{{ $posts["title"] }}</h2>
    <h5>Sumber : {{  $posts ["authors"] }}</h5>
    <p>{{  $posts ["content"] }}</p>

</div>



@endsection 
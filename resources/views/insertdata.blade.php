@extends('layouts.temp')

@section('content1')

<form action="/content" method="POST">
    @csrf
  
    <div class="mb-3">
      <label for="title" class="form-label"> Title </label>
      <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
      <label for="authors" class="form-label"> sumber </label>
      <input type="text" class="form-control" id="authors" name="authors">
    </div>

    <div class="mb-3">
        <label for="excerpt" class="form-label align-items-center" > excerpt </label>
        <textarea name="excerpt" id="excerpt" rows="4" style="width: 100%;" required>

        </textarea>
        <div id="excerptHelp" class="form-text"> Rangkuman Berita </div>
    </div>
      

      <div class="mb-3">
        <label for="content" class="form-label"> Konten </label>
        <textarea name="content" id="content" rows="8" style="width: 100%;" required></textarea>
      </div>

    <button class="btn btn-danger" onclick="window.location='{{ url('manage') }}'"> Back </button> 

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
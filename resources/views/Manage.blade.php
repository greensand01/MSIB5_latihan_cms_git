@extends('layouts.temp')

@section('content1')

<div class="edit">

    <div class="card">
        <div class="card-header bg-gray">
            <button type="button" class="btn btn-sm btn-primary rounded-pill px-3" onclick="window.location='{{ url('content/create') }}'" >
                <i class="fas fa-plus-circle"> Add</i>
            </button>
        </div>
    </div>
@foreach ($posts as $post)
<table>
    <tr>
        <td><h5>{{ $post ["title"] }}</h5></td>
          <td class="btnn">
            <a href="content/{{ $post->id}}/edit"  class="btn btn-sm btn-warning rounded-pill px-3">  <i class="fas fa-pen-square"> Edit </i></a>
            {{-- <button type="button" class="btn btn-sm btn-warning rounded-pill px-3" onclick="window.location='{{ route('edit/ {{ $post->id}}/edit') }}'">
                <i class="fas fa-pen-square"> Edit </i>
            </button> --}}
          </td>
        <td class="btnn">
            <form  action="/content/{{ $post->id }}" method="POST" type="button"  onsubmit="return confirm('are you sure ?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger rounded-pill px-3"> <i class="fas fa-times-circle"> Hapus
                </i> </button>

               
            </form>
        </td>
    </tr>
</table>

@endforeach
   

</div>


@endsection 



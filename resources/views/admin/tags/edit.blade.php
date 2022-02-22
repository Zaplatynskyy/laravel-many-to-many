@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('tags.update', $tag->id)}}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$tag->name}}">
            @error('name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            
            <button type="submit" class="btn btn-primary mt-2">Modifica</button>
        </form>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>Tags List</h3>
                        
                        <a href="{{route('tags.create')}}">
                            <button type="button" class="btn btn-primary">Nuovo</button>
                        </a>
                    </div>
    
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Slug</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <th>{{$tag->id}}</th>
                                        <td>{{$tag->name}}</td>
                                        <td>{{$tag->slug}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('tags.show', $tag->id)}}">
                                                <button type="button" class="btn btn-success">Visualizza</button>
                                            </a>

                                            <a href="{{route('tags.edit', $tag->id)}}" class="mx-2">
                                                <button type="button" class="btn btn-warning">Modifica</button>
                                            </a>
                                            <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="mb-3">Comics</h1>
        <table class="table">
            <thead>
              <tr class="table-primary">
                <th scope="col">#ID</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Series</th>
                <th scope="col">SHOW</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic['id']}}</td>
                        <td>{{$comic['title']}}</td>
                        <td>{{$comic['type']}}</td>
                        <td>{{$comic['series']}}</td>
                        <td><a class="btn btn-primary" href="{{route('comics.show', $comic['id'] )}}">SHOW</a> </td>
                        <td> <a class="btn btn-primary" href="">EDIT</a> </td>
                        <td><a class="btn btn-primary" href="">DELETE</a> </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
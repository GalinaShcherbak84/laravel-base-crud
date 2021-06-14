@extends('layouts.main')

    
@section('content')
    <div class="container">
        <h1 class="mb-4">{{$comics->title}}</h1>
        <img class="mb-4" src="{{$comics->thumb}}" alt="">
        <h3>Price: {{$comics->price}} euro</h3>
        <h4>{{$comics->sale_date}}</h4>
        <p>{{$comics->description}}</p>

    </div>
@endsection
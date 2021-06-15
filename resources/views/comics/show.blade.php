@extends('layouts.main')

    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="mb-4" src="{{$comics->thumb}}" alt="">
            </div>
            <div class="col-md-9">
                <h1 class="mb-4">{{$comics->title}}</h1>
                <h3>Price: {{$comics->price}} euro</h3>
                <h4>{{$comics->sale_date}}</h4>
                <p>{{$comics->description}}</p>
            </div>
        </div>
    </div>
@endsection
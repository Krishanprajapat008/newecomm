@extends('master')

@section('content')

    <div class="container">
    <div class="row">
    @foreach($pro as $key)
        <div class="col-6">
       
            <ul>
            <li><h3>{{$key['name']}}</h3></li>
            <li><h3>{{$key['category']}}</h3></li>
            <li><h3>{{$key['description']}}</h3></li>
            </ul>
        
        </div>

        @endforeach
    </div>
    </div>


@endsection

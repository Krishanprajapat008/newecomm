

@extends('master')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Mobile name and category</h2>
            <ul><li>
            <h3>{{$pro['gallary']}}</h3></li>
            <li><h3>{{$pro['name']}}</h3></li>

        <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$pro['id']}}">
            <button class="btn btn-success">Add to Cart</button>
            <button class="btn btn-primary">Buy Item</button>
            </ul>
        </div>
    </div>
    </div>


@endsection


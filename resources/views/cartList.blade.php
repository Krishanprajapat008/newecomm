@extends('master')

@section('content')

    <div class="container">
    <div class="row">
    <h4>Results for Products</h4><br>

    
    @foreach($ppp as $key)
    
   
        <div class="col-10">

            <div class="row">
      
                <div class="col-sm-4 py-2">
                   
                    <h3>{{$key->name}}</h3>
                   
                </div>
                
               
                <div class="col-sm-4">
                
                    <h3>{{$key->category}}</h3>
                   
                </div>
               
                
                <div class="col-sm-3">
               
                
                <a href="/removeCart/{{$key->cart_id}}" class="btn btn-warning">Remove Cart</a>
                
                </div>
            
            </div>
           
    </div>
    
    @endforeach

    
    </div>
    </div>

    <a href="/ordernow" class="btn btn-success">Order Now</a>
@endsection
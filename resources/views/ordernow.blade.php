@extends('master')

@section('content')

<div class="container">
 
    <div class="row">   
        <div class="col-9 m-auto text-center">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Amount</th>
        <th>Tax</th>
        <th>Delivery</th>
        <th>Total Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>$ {{$total}}</td>
        <td>$ 0.00</td>
        <td>$ 50.00</td>
        <td>${{$total+50}}</td>
      
      </tr>
     
    </tbody>
  </table>
  </div>
</div>
</div> 



<div class="container">
 
 <div class="row">

<div class="col-5 py-3">
  <form action="">
  
    <div class="form-group">
      <label for="pwd"><b>Payment Method:</b></label>
      


      <div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Banking
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Payment wallet
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="pod">Pay on Delivery
      </label>
    </div>
   
    <div class="form-group py-3">
    <label for="exampleFormControlTextarea1">User Address:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>




    </div>
    <button type="submit" class="btn btn-primary">Payment</button>
  </form>
</div>

</div>
</div>
</div> 
@endsection
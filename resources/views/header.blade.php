<?php 
use App\Http\Controllers\productcontroller;
$total = 0;

if(Session::has('user'))
{
  $total = productcontroller::cartItem();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="/">E-Comm</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="login">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/">Product</a>
    </li>

    

    <form class="form-inline" action="/search">
    <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>

    
  <li class="nav-item">
      <a class="nav-link" href="/cartList">cart({{$total}})</a>
    </li>


  @if(Session::has('user'))
    <li class="nav-item">
      <a class="nav-link" href="/logout">Logout</a>
    </li>
 @else
 <li class="nav-item">
      <a class="nav-link" href="/login">Login</a>f
    </li>
@endif


  </ul>
</nav>
<br>

</body>
</html>

@extends('master')

@section('content')


<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="slide-img" src="/Images/Img1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>flowers Dokra Image</h3>
        </div>
    </div>
    <div class="carousel-item">
      <img class="slide-img" src="/Images/Img2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>flowers Fool</h3>
        </div>
    </div>
    <div class="carousel-item">
      <img class="slide-img" src="/Images/Img3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>flowers river</h3>
        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>


<div class="container"><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Gallary</th>
        </tr>

@foreach($data as $item)

    <tr>
        <td>{{$item['id']}}</td>
        <td><a href="detail/{{$item['id']}}">{{$item['name']}}</a></td>
        <td>{{$item['price']}}</td>
        <td>{{$item['category']}}</td>
        <td>{{$item['gallary']}}</td>
    </tr>

@endforeach
    </table>



</div>

@endsection
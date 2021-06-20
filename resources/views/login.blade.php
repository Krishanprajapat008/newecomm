@extends('master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <form action="/action_page.php">
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            </div>
        </div>
    </div>
@endsection




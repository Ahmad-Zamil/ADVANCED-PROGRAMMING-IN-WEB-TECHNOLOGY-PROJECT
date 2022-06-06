@extends('layouts.adminapp')
@section('sells')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


    

</head>
<body>


<div class="container" align = "center">
  <div class="row">
    <div class="col-2">
          <div class="sidebar">
            <a  href="{{route('adminWelcome')}}">Home</a>
            <a href="{{route('sells_manList')}}">SELLS MAN </a>
            <a href="{{route('delivarymanList')}}">DELIVARY MAN</a>
            <a href="">CUSTOMER</a>
          </div>
      </div>
    <div class="col-sm" align = "center">
      <img src="{{URL('image/D-2.jpeg')}}" height="300" width="800">
    </div>
  </div>
</div><br>
<div class="container" align = "center">
  <div class="row">
  <div class="col-2">
  </div>
    <div class="col-sm">
      
    
    <div class="card" style="width: 50rem; background-color:#ff7200">
  <img class="card-img-top" src="{{URL('image/A1.jpeg')}}" alt="Card image cap" height="300" width="800">
  <div class="card-body">
    <h3 class="card-title"><b>Welcome to Admin Home Page </b></h3>
    <p class="card-text"> 
      <b>
      As a admin you have responsibility to manage the other user’s activities. 
We hope you will enjoy your work and do it sincerely
Write to Bod Kopal er 14 Gushti
      </b>

</p>
  </div>
</div>

    </div>
  </div>
</div>

	
</body>
</html>
@endsection

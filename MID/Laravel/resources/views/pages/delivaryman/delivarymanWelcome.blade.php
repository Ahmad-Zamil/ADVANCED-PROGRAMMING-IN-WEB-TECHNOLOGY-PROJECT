@extends('layouts.delivarymanapp')
@section('del')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
          
      <div class="sidebar">
        <a  href="#home">Home</a>
        <a href="">NOTIFICATIONS</a>
        <a href="{{route('orderList')}}">ORDER TO DELIVAR</a>
        <a href="">DELIVARY LIST</a>
      </div>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div><br>

	<!-- @include('inc\footer'); -->
	
</body>
</html>
@endsection

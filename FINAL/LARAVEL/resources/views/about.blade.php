@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<style>
  body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #E67E22 ;
  color: black;
  transform: rotateY(180deg);
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
</head>
<body>

<!-- 1st Row -->
<div class="container" align="center">
  <div class="row">

    <div class="col-sm">
      
    </div>

    <div class="col-sm">
      <h1>EXECUTORS</h1>
    </div>

    <div class="col-sm">
      
    </div>
  </div>
</div><br>

<!-- 2nd Row -->
<div class="container" align="center">
  <div class="row">
    <div class="col-sm">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="{{URL('image/5.jpeg')}}" alt="Avatar" style="width:300px;height:300px;">
          </div>
          <div class="flip-card-back">
            <h1>AHMAD ZAMIL</h1> 
            <p>19-40400-1</p> 
            <p>American International University-Bangladesh</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm">
     
    </div>

    <div class="col-sm">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="{{URL('image/2.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
          </div>
          <div class="flip-card-back">
            <h1>EHSAN TALUKDE</h1> 
            <p>19-40370-1</p> 
            <p>American International University-Bangladeshy</p>
    </div>
  </div>
</div>
    </div>
  </div>
</div><br>

<!-- 3rd Row -->
<div class="container" align="center">
  <div class="row">
    <div class="col-sm">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="{{URL('image/3.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Jannatun Nur Shifa</h1> 
      <p>19-40366-1</p> 
      <p>American International University-Bangladesh</p>
    </div>
  </div>
</div>

</div>

    <div class="col-sm">
      
    </div>

    <div class="col-sm">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="{{URL('image/4.jpg')}}" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>JANNATUL FERDOUS NISHI</h1> 
      <p>19-40374-1</p> 
      <p>American International University-Bangladesh</p>
    </div>
  </div>
</div><br>
    </div>
  </div>
</div>

</body>
</html>

@endsection
@extends('layouts.adminapp')
@section('sells')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <title>DELIVARYMAN LIST</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-2">
      
    <div class="sidebar">
  <a  href="{{route('adminWelcome')}}">Home</a>
  <!-- <a href="{{route('sells_manCreate')}}">SELLS MAN ADD</a> -->
  <a href="{{route('sells_manList')}}">SELLS MAN </a>
  <a href="{{route('delivarymanList')}}">DELIVARY MAN</a>
  <a href="">CUSTOMER</a>
</div>

    </div>
    <div class="col-sm">
      
    <table class="table table-border">

  <tr>
  <h1> DELIVARY MAN</h1>
  </tr>

      <tr>
      <div class="btn-group" role="group" aria-label="Basic example">
      <button type="submit" class="btnn" value="Submit"> <a href="delivarymanPie">OVERVIEW</a></button>
      <button type="submit" class="btnn" value="Submit"> <a href="delivarymanCreate">ADD</a></button>
      <!-- <button type="submit" class="btnn" value="Submit">PRINT</button><br> -->
      </div><br>
      </tr>
 
      <tr>
            <th>ID</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Salary</th>
            <th>Password</th>
            <th>Action</th>
            <th>Action</th>

      </tr>
        @foreach($delivarymans as $delivaryman)
        <tr>
            <td>{{$delivaryman->id}}</td>
            <td>{{$delivaryman->name}}</td>
            <td>{{$delivaryman->dob}}</td>
            <td>{{$delivaryman->address}}</td>
            <td>{{$delivaryman->phone}}</td>
            <td>{{$delivaryman->salary}}</td>
            <td>{{$delivaryman->password}}</td>
            <!-- <td><a href="/delivarymanEdit/{{$delivaryman->id}}/{{$delivaryman->name}}">Edit</a></td> -->
            <!-- <td><a href="/delivarymanDelete/{{$delivaryman->id}}/{{$delivaryman->name}}">delete</a></td> -->
            <td><button type = "button" value = "" class = " btn btn-primary -sm"> <a style="color:#FFFFFF; text-decoration:none" href="/delivarymanEdit/{{$delivaryman->id}}/{{$delivaryman->name}}">Edit</a> </button></td>
            <td><button onclick="myFunction()" type = "button" value = "" class = " btn btn-danger -sm"> <a style="color:#FFFFFF; text-decoration:none" href="/delivarymanDelete/{{$delivaryman->id}}/{{$delivaryman->name}}">delete</a> </button></td>

        </tr>
        @endforeach
        
    </table>
    </div>
  </div>
</div>
<script>
function myFunction() {
  let text = "Do you want to delete it";
  if (confirm(text) == true) {
    //text = "You pressed OK!";
  } else 
  //(confirm(text) == true)
  {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
    
</body>
</html>
@endsection
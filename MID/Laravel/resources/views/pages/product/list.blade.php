@extends('layouts.sells_manapp')
@section('man')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <title>PRODUCT</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-2">
      
        <div class="sidebar">
            <a  href="{{route('sells_manWelcome')}}">Home</a>
            <a href="{{route('productList')}}">PRODUCT LIST</a>
            <a href="">CUSTOMER'S ORDER</a>
            <a href="{{route('orderCreate')}}">ORDER'S DELIVERY</a>
        </div>
    </div>

  
    <div class="col-sm">
      
    <table class="table table-border">

  <tr>
  <h1> PRODUCT</h1>
  </tr>

      <tr>
      <div class="btn-group" role="group" aria-label="Basic example">
      <button type="submit" class="btnn" value="Submit"> <a href="productPie">OVERVIEW</a></button>
      <button type="submit" class="btnn" value="Submit"> <a href="productCreate">ADD</a></button>
      <!-- <button type="submit" class="btnn" value="Submit">PRINT</button><br> -->
      </div><br>
      </tr>
 
      <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>DOS</th>
            <th>Action</th>
            <th>Action</th>

      </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->dos}}</td>
            <!-- <td><a href="/productEdit/{{$product->id}}/{{$product->name}}">Edit</a></td> -->
            <!-- <td><a href="/productDelete/{{$product->id}}/{{$product->name}}">delete</a></td> -->
            <td><button type = "button" value = "" class = " btn btn-primary -sm"> <a style="color:#FFFFFF; text-decoration:none" href="/productEdit/{{$product->id}}/{{$product->name}}">Edit</a> </button></td>
            <td><button onclick="myFunction()" type = "button" value = "" class = " btn btn-danger -sm"> <a style="color:#FFFFFF; text-decoration:none" href="/productDelete/{{$product->id}}/{{$product->name}}">delete</a> </button></td>

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
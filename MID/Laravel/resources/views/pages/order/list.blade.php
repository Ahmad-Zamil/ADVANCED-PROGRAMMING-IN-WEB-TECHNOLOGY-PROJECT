@extends('layouts.adminapp')
@section('sells')

<div class="container">
  <div class="row">
    <div class="col-2">
      
    <div class="sidebar">
  <a  href="#home">Home</a>
  <!-- <a href="{{route('sells_manCreate')}}">SELLS MAN ADD</a> -->
  <a href="">NOTIFICATIONS </a>
  <a href="">ORDER TO DELIVAR</a>
  <a href="">DELIVARY LIST</a>
</div>

    </div>
    <div class="col-sm">
      
    <table class="table table-border">

  <tr>
  <h1> ORDERS</h1>
  </tr>

      <tr>
      <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary"> <a style="color:#FFFFFF; text-decoration:none" href="orderCreate">ADD AN ORDER</a></button>
  <button type="button" class="btn btn-primary">PRINT</button><br>
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
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->dob}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->salary}}</td>
            <td>{{$order->password}}</td>
            <!-- <td><a href="/orderEdit/{{$order->id}}/{{$order->name}}">Edit</a></td> -->
            <!-- <td><a href="/orderDelete/{{$order->id}}/{{$order->name}}">delete</a></td> -->
            <td><button type = "button" value = "" class = " btn btn-primary -sm"> <a style="color:#FFFFFF; text-decoration:none" href="/orderEdit/{{$order->id}}/{{$order->name}}">Accept</a> </button></td>
            <td><button type = "button" value = "" class = " btn btn-danger -sm"> <a style="color:#FFFFFF; text-decoration:none" href="/orderDelete/{{$order->id}}/{{$order->name}}">delete</a> </button></td>

        </tr>
        @endforeach
        
    </table>
    </div>
  </div>
</div>
    
@endsection
@extends('layouts.adminapp')
@section('sells')

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
  <h1> SELLS MAN</h1>
  </tr>
        <tr>
      <div class="btn-group" role="group" aria-label="Basic example">
      <!-- <button type="submit" class="btnn" value="Submit"> <a href="delivarymanPie">OVERVIEW</a></button> -->
      <button type="submit" class="btnn" value="Submit"> <a href="sells_manCreate">ADD</a></button>
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
        @foreach($sells_mans as $sells_man)
        <tr>
            <td>{{$sells_man->id}}</td>
            <td>{{$sells_man->name}}</td>
            <td>{{$sells_man->dob}}</td>
            <td>{{$sells_man->address}}</td>
            <td>{{$sells_man->phone}}</td>
            <td>{{$sells_man->salary}}</td>
            <td>{{$sells_man->password}}</td>
            <!-- <td><a href="/sells_manEdit/{{$sells_man->id}}/{{$sells_man->name}}">Edit</a></td> -->
            <!-- <td><a href="/sells_manDelete/{{$sells_man->id}}/{{$sells_man->name}}">delete</a></td> -->
            <td><button type = "button" value = "" class = " btn btn-primary -sm"> <a style="color:#FFFFFF; text-decoration:none" href="/sells_manEdit/{{$sells_man->id}}/{{$sells_man->name}}">Edit</a> </button></td>
            <td><button onclick="myFunction()" type = "button" value = "" class = " btn btn-danger -sm"> <a style="color:#FFFFFF; text-decoration:none" href="/sells_manDelete/{{$sells_man->id}}/{{$sells_man->name}}">delete</a> </button></td>

        </tr>
        @endforeach
        
    </table>
    </div>
  </div>
</div>
    
@endsection

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
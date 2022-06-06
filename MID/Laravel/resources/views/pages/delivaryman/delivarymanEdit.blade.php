@extends('layouts.adminapp')
@section('sells')
<h2>SELLS MAN</h2>
<form action="{{route('delivarymanEdit')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-4 form-group">
        <span>Id</span>
        <input type="text" name="id" value="{{$delivaryman->id}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$delivaryman->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{$delivaryman->dob}}" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Address</span>
        <input type="text" name="address" value="{{$delivaryman->address}}" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{$delivaryman->phone}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Salary</span>
        <input type="text" name="salary" value="{{$delivaryman->salary}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{$delivaryman->password}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Add" >                  
</form>
@endsection
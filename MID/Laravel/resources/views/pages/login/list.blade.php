@extends('layouts.app')
@section('content')
<form action="{{route('login')}}" method="post" style ="border-style: solid">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <h1>LOG IN</h1>
        
        <div class="col-md-4 form-group">
            <span><b>Name</b></span>
            <input type="text" name="name" value="{{old('name')}}"class="form-control" placeholder="name">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span><b>Password</b></span>
            <input type="password" name="password" value="{{old('password')}}"class="form-control" placeholder="password">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="checkbox" name="remember"> Remember Me<br>
        <input type="submit" class="btn btn-primary" value="Submit" >
        <br>
    </form>
@endsection 
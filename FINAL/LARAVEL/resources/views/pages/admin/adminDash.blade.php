@extends('layouts.a_app')
@section('sells')
    
    @if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection
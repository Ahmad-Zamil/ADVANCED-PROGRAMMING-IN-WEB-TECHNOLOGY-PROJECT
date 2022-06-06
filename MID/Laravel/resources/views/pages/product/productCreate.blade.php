@extends('layouts.sells_manapp')
@section('man')


<h2>Product Insertion</h2>
<form action="{{route('productCreate')}}" class="form-group" method="post">
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
        <input type="text" name="id" value="{{old('id')}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Price</span>
        <input type="text" name="price" value="{{old('price')}}" class="form-control">
        @error('price')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Quantity</span>
        <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control">
        @error('quantity')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Date of Store</span>
        <input type="date" name="dos" value="{{old('dos')}}" class="form-control">
    </div>
    <input type="submit" class="btn btn-success" value="Add" >                  
</form>

@endsection

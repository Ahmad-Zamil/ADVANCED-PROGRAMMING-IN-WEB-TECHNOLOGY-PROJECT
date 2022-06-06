@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  /* Left Bar */
.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #FFB900;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}

/* Search Bar */
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 110%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  height: 40px;
  border: 3px solid #FFB900;
  border-right: none;
  padding: 5px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #FFB900;
}

.searchButton {
  width: 40px;
  height: 40px;
  border: 1px solid #FFB900;
  background: #FFB900;
  text-align: center;
  color: #FFB900;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 40%;
  position: absolute;
  top: 50%;
  left: 40%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>


<div class="container" align="center">
  <div class="row">
    <div class="col-2">
    <img class="d-block w-100" src="{{URL('image/c.png')}}" alt="First slide" height="80" width="20">
    </div>
    <div class="col-sm">
    <div class="wrap">
        <div class="search">
          <input type="text" class="searchTerm" placeholder="Search By Name">
           <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </div>
    
  </div>
</div>
<br>






<div class="container" align="center">
  <div class="row">
        <div class="col-sm">

<br>

          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{URL('image/H1.jpg')}}" alt="First slide" height="350" width="100">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{URL('image/H2.png')}}" alt="Second slide"height="350" width="100">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{URL('image/H3.jpg')}}" alt="Third slide"height="350" width="100">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{URL('image/H4.jpg')}}" alt="Third slide"height="350" width="100">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{URL('image/H5.jpg')}}" alt="Third slide"height="350" width="100">
              </div>
            </div>
          </div>
        </div>
    </div>
</div><br>


</body>
</html>
@endsection

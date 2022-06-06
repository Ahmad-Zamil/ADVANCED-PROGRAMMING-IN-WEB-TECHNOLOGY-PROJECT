
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
  <style type="text/css">

   /* DROPDOWN */
   .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
  </style>
</head>
<body>
 

	
	<div class="container ">
		
  <form style="; border-style:solid; border-color:#474646;  border-radius: 15px; padding: 8px; background-color:#474646">
    <div class="row">
  	
    <div class="col-2" align="center"><a href="{{ route('home')}}">
      <img src="{{URL('image/e.png')}}" height="100" width="100">
    </div>

    <div class="col-2" align="center"><br>
      <div id="ab">
        <h ><a style="color:#FFFFFF; text-decoration:none" href="{{ route('home')}}"><b>HOME</b></a></h></span>
      </div>
    </div>

    <div class="col-2" align="center"><br>
      <div id="ab">
        <h ><a style="color:#FFFFFF; text-decoration:none" href="{{ route('about')}}"><b>ABOUT</b></a></h>
      </div>
  </div>

    <div class="col-2" align="center"><br>
      <div id="ab">
        <h ><a style="color:#FFFFFF; text-decoration:none" href=""><b>CONTACT US</b></a></h>
      </div>
  </div>

    <div class="col-2" align="center"><br>
      <div id="ab">
        <div class="dropdown">
        <h ><a style="color:#FFFFFF; text-decoration:none" href=""><b>LOG IN</b></a></h>
         <div class="dropdown-content">
         <a href="{{route('login')}}">Admin</a>
        <a href="s_login.php">Sells Man</a>
        <a href="i_login_view.php">Delivary Man</a>
        <a href="t_login.php">Patient</a>
    
  </div>
  </div>
      </div>
    </div>
 </form>
</div>


</body>
</html>
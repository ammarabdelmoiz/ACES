<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
body {
  background-color: #A9A9A9;
}
.center {
  margin: auto;
  width: 10%;
  padding: 10px;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.flex-container {
  display: flex;
}

.flex-container > div {
    background-color: black;
  color: white;
  margin: 185px;
  margin-top: 20px;
  border-radius: 70%;
  height: 150px;
  width: 150px;
  padding: 20px;
  font-size: 25px;
  padding: center;

}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-grey">
<a class="navbar-brand" href="#">
    <img src="aces.jpg" width="50" height="50" alt="">
  </a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h5>Home</h5> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>About</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>Blog</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h5>Contact us</h5></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="#"><h5 style="color:black;">Sign up</h5></a> 
    </form>
  </div>
</nav>
<br>
<br>
<br>
<img style='margin-top:-35px; width:32%;' src="car.jpeg" alt="Audi R8">
<hr>
<div class="center">
  <h4>My Work</h4>
</div>
<div class="flex-container">
  <div style="text-align:center;">PROJECT 1</div>
  <div style="text-align:center;">PROJECT 2</div>
  <div style="text-align:center;">PROJECT 3</div>  
</div>
 
	
</body>
</html>
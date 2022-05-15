<!DOCTYPE html>
<html lang="en">
<head>
  <title>MedController Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #79F1A4;">
  <div class="container fluid">
  <!-- Brand -->
  <span class="navbar-brand mb-0 h1"><img src="./Images/MedController.png" alt="Logo" style="width:20%;" href="#"> </span>
  <!-- Links -->
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="#"><b>Home</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><b>Resep</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><b>Jadwal</b></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><b>Chat</b></a>
    </li>
  </ul>
  </div>
  <a href="#">
  <img src="./Images/avatar.png" alt="Logo" style="width:50px;" class="rounded-circle" href="#"> 
  </a>
</nav>
<br><br><br>
      <h5><label for="exampleFormControlTextarea1" class="form-label" >Pengingat</label></h5>
      <div class="form mb-3 mt-3">
        <div class="p-2 text-dark bg-opacity-25" style="background-color: #79F1A4;">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        <div class="d-grid gap-2">
        <button class="btn btn-secondary float-end" data-bs-toggle="collapse" data-bs-target="#demo">+</button>
        <div id="demo" class="collapse">
          <div class="p-2 text-dark bg-opacity-25" style="background-color: #79F1A4;">
          <button type="button" class="btn-close" data-bs-dismiss="form" aria-label="Close"></button>
            <textarea class="form-control " id="exampleFormControlTextarea1" rows="10"></textarea>
      </div>
    </div>
      </div>
    </div>
    </div>

</body>
</html>

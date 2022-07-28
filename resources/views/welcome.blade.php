<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TI 20 | Laravel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #FF5132;">
  <div class="container-fluid">
    <img src="{{ asset('image/hai.jpg')}} " style="height:20px; width:20px;">
    <a class="navbar-brand" href="#">Hi-Lorant</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://www.w3schools.com/html/default.asp">W3School</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/?hl=id">Instagram</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/home?lang=id">Twitter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="card" style="width: 18rem;">
  <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt516d37c6c84fcda0/625db737c9aa404b76ddd594/Fade_Key_Art_587x900_for_Website.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fade</h5>
    <p class="card-text">Initiator</p>
    <a href="#" class="btn btn-primary">Go to Valorant</a>
  </div>
</div>

<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Agent</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jett</td>
      <td>Duelist</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Sage</td>
      <td>Sentinel</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Fade</td>
    </tr>
  </tbody>
</table>
    </body>
</html>

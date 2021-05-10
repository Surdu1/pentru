<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="header.css">
</head>
<body>
  <div class="d">
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="nav-brand" href="#">
           <img style="width:50px;height:50px;" src="cos.png">
        </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="form-inline mx-lg-auto">
        <div class="input-group">
        <div class="input-group-prepend">
        <select id="inputGroup-sizing-default" class="input-group-text custom-select" id="inputGroupSelect04">

        </select>
      </div>
      <input type="text" style="overflow:hidden;" class="form-control" placeholder="Cauta">
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary my-0 my-sm-0"><i class="fas fa-search"></i></button>
      </div>
      </div>
      </form>
      <div class="icons">
        <a href="#" class="icons-btn d-inline-block bag">
          <span><i class="fas fa-shopping-bag"></i></span>
        </a>
        <a href="#" class="icons-btn d-inline-block px-1">
          <span> <i class="fas fa-user"></i></span>
        </a>
        <button type="button" class="btn btn-primary">
          Log in
        </button>
      </div>
      </div>
    </div>
    </nav>
<div class="i">
<br>
<div class="a" id="i1" style="margin-top:12vh "><a href="electrocasnice">Electrocasnice</a></div>
<br>
<div class="a" id="i2"style="margin-top:12vh"><a href="echipamente_sportive">Echipamente sportive</a></div>
<br>
<div class="a" id="i3" style="margin-top:12vh"><a href="it">IT</a></div>
<br>
<div class="a" id="i4" style="margin-top:12vh"><a href="unelte">Unelte pentru constructi</a></div>
</div>
<div class="o">
<?php
$sql = 'SELECT * FROM produse';
$result = mysqli_query($connect,$sql);
while($row = $result->fetch_assoc()){
echo '<div class="card" style="width: 30vw;">
  <img src="imagini/'.$row["nume_imagine"].'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$row["nume_produs"].'</h5>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Adauga in cos</a>
    <a href="#" class="btn btn-primary">Cumpara</a>
  </div>
  </div>';
}
?>

</div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>

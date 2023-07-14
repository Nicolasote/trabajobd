<?php





$admin1 = "nicolas";
$passadmin1 = "1234";

if($_GET["USUARIO"]==$admin1 && $_GET["PASS"]==$passadmin1){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styledatos.css" media="screen" />

    <title>datos</title>
</head>
<body>

<h1>BIENVENIDO NICOLAS<span class="badge bg-secondary">ADMIN</span></h1>
    

<div class="d-flex justify-content-evenly">

<button type="button" class="btn btn-primary position-relative">
  EVENTOS POR VER
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    27+
    <span class="visually-hidden">unread messages</span>
  </span>
</button>

<section>
  <figure class="figure">
    <img src="im/admin1.jpg" class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption text-end">NICOLAS</figcaption>
  </figure>
</section>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>

<?php

}else{

/* aca va el codigo si no se cumple la condicion de usuario admin */ 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styledatos.css" media="screen" />

    <title>datos</title>
</head>
<body>

<h1>ADMINISTRADOR INCORRECTO<span class="badge bg-secondary">VUELVA A INTENTARLO</span></h1>
    

<div class="d-flex justify-content-evenly">

<section>
    <img src="im/user1.jpg" class="img-fluid" alt="...">
</section>


</div>

<div class="d-flex justify-content-center">
  <a target="" class="fcc-btn" href="ingresousuarios.html">Volver a intentarlo</a>  
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>

<?php

}

?>





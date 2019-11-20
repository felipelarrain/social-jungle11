<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Heebo|Muli|Noto+Sans+KR|Raleway&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/style_nico.css">
  <script type="text/javascript">
    function redirectTo(sUrl) {
      window.location = sUrl
    }
  </script>

  <title>Iniciar Sesion</title>
</head>

<?php include_once'header.php'?>

<body>
  <main class="main col-xs-10 ">
    <section class="row d-flex justify-content-center">
      <form class="col-lg-3 col-md-6 col-sm-8 " method="POST" action="">
        <h2>Iniciar Sesion</h2>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter email" name="email" required>
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"    name="password" required>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="recordar">
          <label class="form-check-label" for="exampleCheck1">Recordarme</label>
        </div>
        <button class="btn _boton" onclick="redirectTo('inicio.php')">Inicia sesion</button>
      </form>
    </section>
    <section class="reg">
      <h2>No tienes una cuenta?</h2>
      <h3>Registrate <a href="register.php">Aqui!</a></h3>
    </section>
  </main>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>

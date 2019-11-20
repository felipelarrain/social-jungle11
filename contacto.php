<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,600i,700,700i,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Contacto</title>
</head>

<body>

    <!-- Header PHP -->

    <?php include_once 'header.php' ?>

    <h1 class="contactanos">CONTACTO</h1>

    <div class="div-form">
        <form class="contact">
            <div class="form-row">
                <div class="form-group col-md-6" col-sm-12>
                    <label for="inputEmail4">Nombre</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Alejandro" required minlength=5>
                </div>
                <div class="form-group col-md-6 col-sm-12 ">
                    <label for="inputPassword4">Apellido</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Martinez" required minlength=5>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDireccion">Email</label>
                <input type="text" class="form-control" id="inputDireccion" placeholder="ejemplo@ejemplo.com" required>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Direccion</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Calle Falsa 123" required minlength=5>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12 col-sm-12">
                    <label for="inputCity">Ciudad</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Buenos Aires" required minlength=5>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Opiniones</label>
                <textarea class="form-control col-md-12 col-sm-12" id="textarea" rows="3" col-6 required minlength=5></textarea>
            </div>
            <button type="submit" class="btn btn-primary col-sm-12">Envia tu duda!</button>
        </form>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.1864516967726!2d-58.44586488482158!3d-34.54883428047378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1568339705525!5m2!1ses-419!2sar"
        frameborder="0" style="border:0;" allowfullscreen=""></iframe>



    <?php include_once 'footer.php'; ?>
</body>

</html>
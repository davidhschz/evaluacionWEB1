<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="formulario.php">PHP</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>   

    <body>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col">
                    <form action="logica.php" method="POST">
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Edad" name="edad">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2" name="botonSumar">Sumar</button>
                    </form>
                    
                    
                    <?php if(isset($_POST['botonSumar'])):
                    $nombre=$_POST['nombre'];
                    $apellido=$_POST['apellido'];
                    $edad=$_POST['edad'];
                    ?>
                    <h4 class="text-success"><?php echo($nombre)?></h4>
                    <h4 class="text-danger"><?php echo($apellido)?></h4>
                    <h4 class="text-primary"><?php echo($edad)?></h4>
                    <?php endif ?>
                    // text succes, danger , primary
                </div>
            </div>
        </div>
    </body> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>


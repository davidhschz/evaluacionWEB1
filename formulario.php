<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-6">
                    <form action="formulario.php" method="POST">
                        <div class="row">
                            <div class="col">
                            <input type="number" class="form-control" placeholder="Primer número" name="nombreProducto">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Segundo número" name="precioProducto">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2" name="botonSumar">Sumar</button>
                    </form>
                    <?php 
     
                        if(isset($_POST["botonEnviar"])) {
                            
                            $nombre = $_POST["nombreProducto"];
                            $precio = $_POST["precioProducto"];
                            echo("El producto es: ".$nombre." su precio es de: $".$precio);

                        }    
                    
                    ?>
                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
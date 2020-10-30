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

    <body>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col">
                    <form action="practica.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Primer número" name="primerNumero">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Segundo número" name="segundoNumero">
                            </div>
                        </div>
                        <div class="form-group mt-2">
                                <label for="exampleFormControlSelect1">Operación</label>
                                <select class="form-control" name="operacion">
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="multiplicacion">Multiplicación</option>
                                    <option value="division">División</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="botonCalcular">Calcular</button>
                    </form>
                    
                    <?php 
                    $numero1 = $_POST['primerNumero'];
                    $numero2 = $_POST['segundoNumero'];
                    if(isset($_POST["botonCalcular"])){
                        switch ($_REQUEST['operacion']) {
                            case 'suma':
                                $resultado=$numero1+$numero2;
                                echo("Resultado: ".$resultado);
                                break;
                            
                            case 'resta':
                                $resultado=$numero1-$numero2;
                                echo("Resultado: ".$resultado);
                                break;

                            case 'multiplicacion':
                                $resultado=$numero1*$numero2;
                                echo("Resultado: ".$resultado);
                                break;

                            case 'division':
                                $resultado=$numero1/$numero2;
                                echo("Resultado: ".$resultado);
                                break;
                        }
                    }
                    
                    
                    ?>

                </div>
            </div>
        </div>
    </body> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
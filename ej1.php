<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Roboto:400,700|Roboto+Condensed:400,700" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="formulario.php">PHP</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link active" href="ej1.php">Ejercicio 1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ej2.php">Ejercicio 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ej3.php">Ejercicio 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ej4.php">Ejercicio 4</a>
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
                                <select class="form-control" name="operacion" method="POST">
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="multiplicacion">Multiplicación</option>
                                    <option value="division">División</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="botonCalcular">Calcular</button>
                    </form>
                    
                    <?php 
                    if(isset($_POST["botonCalcular"])):
                        $numero1 = $_POST['primerNumero'];
                        $numero2 = $_POST['segundoNumero']; 
                        switch ($_POST['operacion']) {
                            case 'suma':
                                $resultado=$numero1+$numero2;?>
                                <h1 class="display-4 text-center"><?php echo("Resultado: ".$resultado)?></h1>;
                                <?php break;
                            
                            case 'resta':
                                $resultado=$numero1-$numero2;?>
                                <h1 class="display-4 text-center"><?php echo("Resultado: ".$resultado)?></h1>;
                                <?php break;

                            case 'multiplicacion':
                                $resultado=$numero1*$numero2;?>
                                <h1 class="display-4 text-center"><?php echo("Resultado: ".$resultado)?></h1>;
                                <?php break;

                            case 'division':
                                $resultado=$numero1/$numero2;?>
                                <h1 class="display-4 text-center"><?php echo("Resultado: ".$resultado)?></h1>;
                                <?php break;
                        }?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </body> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
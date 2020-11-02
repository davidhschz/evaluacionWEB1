<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fanwood+Text&family=Quattrocento:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="ej1.php">Ejercicio 1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
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
    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center shadow-lg p-3 mb-5 bg-white rounded">
                    <h2 class="fontTitle">Cálculo indice de masa corporal</h2>
                    <p class="fontP">Usando la siguiente fórmula se le asignará una clasificación para identificar su estado físico</p>
                    <img src="https://1.bp.blogspot.com/-o3toFSEnaVY/UQp5cWfolNI/AAAAAAAAAsU/yDxXQisO4qs/s1600/IMC.png" alt="formula">
                </div>
                <div class="col-md-6">
                    <p class="fontP">A continuación ingrese su peso en kg y altura en centímetros.</p>
                    <form action="ej2.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Peso" name="peso">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Altura" name="altura">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="botonCalcular">Calcular</button>
                    </form>
                    <?php
                    if (isset($_POST["botonCalcular"])) {
                        if($_POST['peso'] != "" && $_POST['altura'] != "" && (int)$_POST['peso'] >= 1 && (int)$_POST['altura'] >= 1 ){    
                            $peso = (int)$_POST['peso'];
                            $altura = (int)$_POST['altura'];
                            $altura = $altura / 100;
                            $imc = $peso / $altura ** 2;
                            $imc = number_format($imc, $decimals = 2);
                            if ($imc < 18.5) {
                                $alerta = '<div class="alert alert-warning" role="alert">'; 
                                $alerta .= 'Peso insuficiente';
                                $alerta .= '</div>';  
                                echo $alerta;
                                echo "<h1 class='display-4 text-center'>Su IMC es: {$imc}</h1>";
                            } else if ($imc >= 18.5 && $imc <= 24.9) {
                                $alerta = '<div class="alert alert-success" role="alert">'; 
                                $alerta .= 'Normopeso';
                                $alerta .= '</div>';  
                                echo $alerta;
                                echo "<h1 class='display-4 text-center'>Su IMC es: {$imc}</h1>";
                            } else if ($imc >= 25 && $imc <= 26.9) {
                                $alerta = '<div class="alert alert-warning" role="alert">'; 
                                $alerta .= 'Sobrepeso grado 1';
                                $alerta .= '</div>';  
                                echo $alerta;
                                echo "<h1 class='display-4 text-center'>Su IMC es: {$imc}</h1>";
                            } else if ($imc >= 27 && $imc <= 29.9) {
                                $alerta = '<div class="alert alert-warning" role="alert">'; 
                                $alerta .= 'Sobrepeso grado 2 (Preobesidad)';
                                $alerta .= '</div>';  
                                echo $alerta;
                                echo "<h1 class='display-4 text-center'>Su IMC es: {$imc}</h1>";
                            } else if ($imc >= 30 && $imc <= 34.9) {
                                $alerta = '<div class="alert alert-danger" role="alert">'; 
                                $alerta .= 'Obesidad de tipo 1';
                                $alerta .= '</div>';  
                                echo $alerta;
                                echo "<h1 class='display-4 text-center'>Su IMC es: {$imc}</h1>";
                            } else if ($imc >= 35 && $imc <= 39.9) {
                                $alerta = '<div class="alert alert-danger" role="alert">'; 
                                $alerta .= 'Obesidad de tipo 2';
                                $alerta .= '</div>';  
                                echo $alerta;
                                echo "<h1 class='display-4 text-center'>Su IMC es: {$imc}</h1>";
                            } else if ($imc >= 40 && $imc <= 49.9) {
                                $alerta = '<div class="alert alert-danger" role="alert">'; 
                                $alerta .= 'Obesidad de tipo 3 (mórbida)';
                                $alerta .= '</div>';  
                                echo $alerta;
                                echo "<h1 class='display-4 text-center'>Su IMC es: {$imc}</h1>";
                            } else {
                                $alerta = '<div class="alert alert-danger" role="alert">'; 
                                $alerta .= 'Obesidad de tipo 4 (extrema)';
                                $alerta .= '</div>';  
                                echo $alerta;
                                echo "<h1 class='display-4 text-center'>Su IMC es: {$imc}</h1>";
                            }
                        } else {
                            $alerta = '<div class="alert alert-danger" role="alert">'; 
                            $alerta .= 'Ingrese todos los datos, solo se admiten números enteros positivos.';
                            $alerta .= '</div>';  
                            echo $alerta;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
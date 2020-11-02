<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="ej2.php">Ejercicio 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ej3.php">Ejercicio 3</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ej3.php">Ejercicio 4</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center shadow-lg p-3 mb-5 bg-white rounded">
                    <h2 class="fontTitle">Calculador de sueldo semanal</h2>
                    <p class = "fontP">A continuación ingrese el número de horas laboradas en la semana.</p>
                    <form action="ej4.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Ej: 40" name="hoursWorked">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="calculate">Calcular</button>
                    </form>
                </div>
                <div class="col-md-6 text-center shadow p-3 mb-5 bg-white rounded">
                    <p class = "fontP">Recuerde que si trabaja 40 horas o menos se le pagará $20.000 por hora, más de 40 horas se considerarán horas extras y se le pagarán a $25.000.</p>
                    <?php 
                    if (isset($_POST['calculate'])) {
                        $hoursWorked = $_POST['hoursWorked'];
                        if ($_POST['hoursWorked'] != "" && (int)$_POST['hoursWorked'] >=1) {
                            $hourValue = 0;
                            if ($hoursWorked <= 40) {
                                $hourValue = 20000;
                                $salary = $hoursWorked * $hourValue;
                            } else {
                                define('BASE_SALARY' , 800000);
                                $hourValue = 25000;
                                $hoursWorked -= 40;
                                $salary = $hoursWorked * $hourValue + BASE_SALARY;
                            }
                            $salary = number_format($salary);
                            echo "<h1 class='display-5 text-center'>Total sueldo semanal: {$salary}</h1>"; 
                        } else {
                            $alert = '<div class="alert alert-danger" role="alert">'; 
                            $alert .= 'Ingrese todos los datos, solo se admiten números enteros positivos.';
                            $alert .= '</div>';  
                            echo $alert;
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
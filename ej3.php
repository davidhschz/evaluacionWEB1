<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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
                        <a class="nav-link" href="index.php">Ejercicio 1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ej2.php">Ejercicio 2</a>
                    </li>
                    <li class="nav-item active">
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
                    <h2 class="fontTitle">Número de zapatos</h2>
                    <form action="ej3.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Ej: 4" name="shoesNumber">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 btn-block" name="buttonNumber">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6 text-center shadow p-3 mb-5 bg-white rounded">
                    <form form action="ej3.php" method="POST">
                        <div class="row">
                        <?php if(isset($_POST['buttonNumber'])) : 
                            $shoesNumber = (int)$_POST['shoesNumber'];
                            $total = 0;
                            for ($i=0; $i < $shoesNumber; $i++){ ?>
                                <h2 class="fontP">Ingrese el valor del zapato <?php echo $i + 1; ?></h2>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Ej: 4" name="shoeNumber<?php echo (string)$i; ?>">
                                </div>
                            <?php } 
                                
                            
                            ?>
                            <input type="hidden" value="<?php echo $shoesNumber; ?>" name="shoesNumber">
                            <button type="submit" class="btn btn-primary mt-2 btn-block" name="buttonPrice">Calcular</button> 
                        <?php else: ?>
                            <h2>Tabla</h2>
                            <ul>
                                <li>
                                    <p>
                                    Si el número de zapatos es mayor 3 pares, pero menor o
                                        igual de 8 pares, se le otorga un 20% de descuento.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    Si son 3 pares se les dará un 10% de descuento al cliente
                                        sobre el total de la compra.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                    Si son más 8 pares de zapatos se otorgará un 50% de
                                        descuento. 
                                    </p>
                                </li>
                            </ul>
                        <?php endif ?>
                        </div>
                        <?php
                        ?>
                    </form>
                    <?php 
                        if(isset($_POST["buttonPrice"])) :
                            $shoesNumber = (int)$_POST['shoesNumber'];
                            $total = 0;
                            for ($i=0; $i < $shoesNumber; $i++) { 
                                $total += (int)$_POST['shoeNumber' . $i];
                            }
                            echo "<h1 class='display-5 text-center'>Sin descuento: {$total}</h1>"; 
                            $totalFinal = 0;
                            if ($shoesNumber > 3 && $shoesNumber <= 8) {
                                $totalFinal = $total - ($total * 0.2);
                            } elseif ($shoesNumber == 3) {
                                $totalFinal = $total - ($total * 0.1);
                            } elseif ($shoesNumber > 8){
                                $totalFinal = $total - ($total * 0.5);
                            }

                            if ($totalFinal != 0) {
                                echo "<h1 class='display-5 text-center'>Despues del descuento: {$totalFinal}</h1>";
                            }
                    ?>

                    <?php 
                        endif
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
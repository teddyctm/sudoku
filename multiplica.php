<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodoku Matemático</title>
    <link rel="stylesheet" type="text/css" href="estilo_multi.css">
    <!-- link iconos de de los botones cronometro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<header>
    <?php include "header.php"; ?>
</header>

<body>
    <br>
    <div class="contenedor">
        <h1>MULTIPLICACION</h1>
        <table>
            <tr>
                <td class="contiene">3</td>
                <td class="contiene">x</td>
                <td class="no_contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="no_contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="contiene">x</td>
                <td></td>
                <td class="contiene">=</td>
                <td></td>
                <td class="contiene">x</td>
            </tr>
            <tr>
                <td class="no_contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td></td>
                <td class="contiene">2</td>
                <td></td>
                <td class="no_contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="contiene">=</td>
                <td></td>
                <td class="contiene">x</td>
                <td></td>
                <td class="contiene">=</td>
            </tr>
            <tr>
                <td class="contiene">6</td>
                <td class="contiene">x</td>
                <td class="no_contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">24</td>
            </tr>
        </table>
        <br>
        <div class="contenedor-alternativa">
            <div class="caja" draggable="true" ondragstart="drag(event)" id="a">1</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="b">2</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="c">8</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="d">24</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="e">4</div>
        </div>
        <br>
        <br>
        <!-- fin visualizar resultado -->
        <div class="resultado">
            <h2 >respuesta</h2>
        </div>
        <script src="multiplica.js"></script>
        <script src="tiempo.js"></script>
        <br>
<!-- reloj -->
<div class="marco">
    <div class="tiempo" id="tiempo">00:00:00.000</div>
    <div class="botones-contenedor">
        <div class="btn" onclick="iniciar()">
        <i class="fas fa-play"></i>
        </div>
        <div class="btn" onclick="pausar()">
        <i class="fas fa-pause"></i>
        </div>
        <div class="btn" onclick="reiniciar()">
        <i class="fas fa-undo-alt"></i>
        </div>
    </div>
</div>
<!-- fin reloj -->
    </div>
</body>
</html>
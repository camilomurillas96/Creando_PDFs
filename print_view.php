<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    
    <title>Generator PDF in PHP</title>
    
    
</head>

<body>
    <?php 
    if(isset($_POST['titulo'])):  ?>
    <div id="cabecera">
    
    <img src="./img/bit.jpg" />
    <h1><?=$_POST['titulo']?></h1>
</div>
<?php endif; ?>
    
    <h2>Más opciones para ver...</h2>

<div id="cajas">
    <div class="caja u"></div>
    <div class="caja d"></div>
    <div class="caja t"></div>
    <div class="caja c"></div>
</div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody class="cuerpo">
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>


</body>
</html>
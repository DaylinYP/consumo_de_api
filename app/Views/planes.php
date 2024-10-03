<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <?php
    foreach ($datos as $plan):
    ?>
            <div class="card col-3 mt-2 mr-2" style="width: 18rem;">
                <div class="card" style="width: 18rem;">
                    <img src="https://media.istockphoto.com/id/1394988455/es/foto/port%C3%A1til-con-pantalla-en-blanco-sobre-fondo-blanco.jpg?s=612x612&w=0&k=20&c=9bGhsdR3oYjaqMSRSKHScOQmSAmJZOjsWc8nQKPkvXU="
                        class="card-img-top" width="80px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title"><?php $plan['nombre'];?></h5>
                        <p class="card-text">
                            Pago Mensual: <?= $plan['pago_mensual']?>
                        </p>
                        <a href="<?= base_url('editar/'). $plan['plan_id'];?>" class="btn btn-primary">Editar</a>
                        <a href="<?= base_url('eliminar/'). $plan['plan_id'];?>" class="btn btn-primary">Eliminar</a>

                    </div>
                </div>
            </div>
            <?php
    endforeach;
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($datos as $plan):
            ?>
            <tr>
                <td><?= $plan['plan_id'];?></td>
                <td></td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
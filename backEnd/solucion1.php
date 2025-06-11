<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solucion 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once('data/operacion1.php');
    ?>
    <form action="data/operacion1.php" method="POST">
        <h3>
            Calcular el promedio de 3 numeros
        </h3>
        <!-- Botton para regresar al index -->
        <button class="btn btn-secondary mb-3" type="button">
            <a href="../index.html" class="btn btn-secondary">Regresar</a>
        </button>
        <div class="mb-3">
            <label for="txt_num1" class="form-label">Ingrese numero 1</label>
            <input type="number" class="form-control" name="txt_num1" id="txt_num1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="txt_num2" class="form-label">Ingrese numero 2</label>
            <input type="number" class="form-control" id="txt_num2" name="txt_num2">
        </div>
        <div class="mb-3">
            <label for="txt_num3" class="form-label">Ingrese numero 3</label>
            <input type="number" class="form-control" id="txt_num3" name="txt_num3">
        </div>
    <button type="submit" class="btn btn-primary" >Calcular</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>

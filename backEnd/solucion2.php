<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solucion 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <?php
        require_once('data/operacion2.php');
        
        // Procesar el formulario cuando se envía
        $resultado = null;
        if ($_POST && isset($_POST['txt_num1'], $_POST['txt_num2'])) {
            $num1 = floatval($_POST['txt_num1']);
            $num2 = floatval($_POST['txt_num2']);
            
            $area = new Area($num1, $num2);
            $resultado = $area->getResultado();
        }
        ?>
        
        <form method="POST">
            <h3>
                Calcular el area de un triangulo
            </h3>
            <!-- Botón para regresar al index -->
            <button class="btn btn-secondary mb-3" type="button">
                <a href="../index.html" class="btn btn-secondary">Regresar</a>
            </button>
            
            <div class="mb-3">
                <label for="txt_num1" class="form-label">Ingrese la altura del triangulo</label>
                <input type="number" step="any" class="form-control" name="txt_num1" id="txt_num1" 
                       value="<?php echo isset($_POST['txt_num1']) ? htmlspecialchars($_POST['txt_num1']) : ''; ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="txt_num2" class="form-label">Ingrese la base del triangulo</label>
                <input type="number" step="any" class="form-control" id="txt_num2" name="txt_num2"
                       value="<?php echo isset($_POST['txt_num2']) ? htmlspecialchars($_POST['txt_num2']) : ''; ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        
        <?php if ($resultado !== null): ?>
            <div class="alert alert-success mt-4" role="alert">
                <h4 class="alert-heading">Resultado</h4>
                <p class="mb-0">El área del triángulo es: <strong><?php echo number_format($resultado, 2); ?></strong></p>
            </div>
        <?php endif; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
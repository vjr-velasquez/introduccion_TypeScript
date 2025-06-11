<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solucion 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <?php
        require_once('data/operacion3.php');
        
        // Procesar el formulario cuando se envía
        $resultado = null;
        if ($_POST && isset($_POST['txt_num1'])) {
            $num1 = floatval($_POST['txt_num1']);
            
            $par_impar = new Par_impar($num1);
            $resultado = $par_impar->getResultado();
        }
        ?>
        
        <form method="POST">
            <h3>
                Determinar si un numero es par o impar
            </h3>
            <!-- Botón para regresar al index -->
            <button class="btn btn-secondary mb-3" type="button">
                <a href="../index.html" class="btn btn-secondary">Regresar</a>
            </button>
            
            <div class="mb-3">
                <label for="txt_num1" class="form-label">Ingrese un numero</label>
                <input type="number" step="any" class="form-control" name="txt_num1" id="txt_num1" 
                       value="<?php echo isset($_POST['txt_num1']) ? htmlspecialchars($_POST['txt_num1']) : ''; ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        
        <?php if ($resultado !== null): ?>
            <div class="alert alert-success mt-4" role="alert">
                <h4 class="alert-heading">Resultado</h4>
                <p class="mb-0">El numero es: <strong><?php echo $resultado; ?></strong></p>
            </div>
        <?php endif; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
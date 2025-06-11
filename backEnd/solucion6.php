
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solucion 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <?php
        require_once('data/operacion6.php');
        
        // Procesar el formulario cuando se envía
        $resultado = null;
        if ($_POST && isset($_POST['txt_inverso'])) {
            $texto = $_POST['txt_inverso'];
            $obj = new Texto_invertido($texto);
            $resultado = $obj->getResultado();
        }
        ?>
        
        <form method="POST">
            <h3>Invertir una cadena de texto</h3>
            <!-- Botón para regresar al index -->
            <a href="../index.html" class="btn btn-secondary mb-3">Regresar</a>
            
            <div class="mb-3">
                <label for="txt_inverso" class="form-label">Ingrese una cadena de texto</label>
                <input type="text" class="form-control" name="txt_inverso" id="txt_inverso" 
                       value="<?php echo isset($_POST['txt_inverso']) ? htmlspecialchars($_POST['txt_inverso']) : ''; ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        
        <?php if ($resultado !== null): ?>
            <div class="alert alert-success mt-4" role="alert">
                <h4 class="alert-heading">Resultado</h4>
                <p class="mb-0">El texto invertido es: <strong><?php echo $resultado; ?></strong></p>
            </div>
        <?php endif; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
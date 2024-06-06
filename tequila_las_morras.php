<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('Captura2.PNG');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            color: #FFFFFF;
            font-family: Algerian;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Tequila Las Morras</h1>
    <h2>Instrucciones:</h2>
    <h3>Ponle 0 al tequila que no quieras comprar</h3>
    <h4>Selecciona la cantidad que quieras y dale comprar</h4>
    
    <h5>Productos Disponibles:</h5>
    <form method="POST">
        <label for="cantidadTequila1">Cantidad de Tequila Premium ($681):</label>
        <input type="number" name="cantidadTequila1" id="cantidadTequila1" min="0"><br><br>
        
        <label for="cantidadTequila2">Cantidad de Tequila Regular ($500):</label>
        <input type="number" name="cantidadTequila2" id="cantidadTequila2" min="0"><br><br>
        
        <label for="cantidadTequila3">Cantidad de Tequila Especial ($500):</label>
        <input type="number" name="cantidadTequila3" id="cantidadTequila3" min="0"><br><br>
        
        <input type="submit" value="Comprar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cantidadTequila1 = $_POST['cantidadTequila1'];
        $cantidadTequila2 = $_POST['cantidadTequila2'];
        $cantidadTequila3 = $_POST['cantidadTequila3'];

        $precioTequila1 = 681;
        $precioTequila2 = 500;
        $precioTequila3 = 500;

        $totalCompra = ($cantidadTequila1 * $precioTequila1) + ($cantidadTequila2 * $precioTequila2) + ($cantidadTequila3 * $precioTequila3);

        echo "<h2>Resumen de la Compra:</h2>";
        echo "<p>Cantidad de Tequila Premium: $cantidadTequila1</p>";
        echo "<p>Cantidad de Tequila Regular: $cantidadTequila2</p>";
        echo "<p>Cantidad de Tequila Especial: $cantidadTequila3</p>";
        echo "<h2>Total de la Compra:</h2>";
        echo "<p>Total: $totalCompra pesos</p>";
    }
    ?>
    
    <footer>
        <p>Historia de Las Morras: Las Morras es una empresa tequilera con una larga historia en la producción de tequila de alta calidad.</p>
    </footer>
    
    <div>
        <h2>Servicio al Cliente</h2>
        <img src="Captura3.PNG" alt="Servicio al Cliente" style="width: 20%;">
    </div>
</body>
</html>
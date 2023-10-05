<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header">

        </div>
    </header>
    <main>
        <div class="main">
            <form action="envio.php" method="post">
                <label for="">Nombre</label>
                <input type="text" name="nmNombre">
                <label for="">Apellido</label>
                <input type="text" name="nmApellido">
                <input type="number" name="nmEdad">
                <label for="">Edad</label>
                <select name="nmCarrera" id="">
                    <option value="Marketing">Marketing</option>
                    <option value="Periodismo">Periodismo</option>
                    <option value="Diseño Multimedial">Diseño Multimedial</option>
                </select>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
    <footer class="footer">
        <div>
            
        </div>
    </footer>
</body>
</html>
<?php
    $nombre = $_POST["nmNombre"];
    $apellido = $_POST["nmApellido"];
    $edad = $_POST["nmEdad"];
    $carrera = $_POST["nmCarrera"];
    if($nombre == "Mateo" && $edad >= "18" && $carrera == "Diseño Multimedial"){
        echo "<h1>$nombre $apellido tiene más de $edad por lo que puede inscribirse en la carrera de $carrera</h1>";
    }

    else{
        echo "<h1>No es un estudiante</h1>";
    }

    
?>
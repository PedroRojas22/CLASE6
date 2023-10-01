<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATEMATICA BASICA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilos.css">
</head>
<body>
    <header>
        <div class="banner">
            <img scr="" alt="banner del servicio">
</div>
<br><br>
<nav>
<a href="?opc=OPERACIONES BASICAS">OPERACIONES BASICAS</a>
    <a href="index.html">IR AL MENU PRINCIPAL </a>
</nav>
</header>
<br><br>

<form action ="resultado2.php" method="GET">
    <label> OPERACIONES BASICAS</label>
   <br>
   <br>
   <label form ="num1"> introduzca el radio:</label>
   <input type="number" name="num1" required>

<br>
<br>

<label for="num2"> Introduzca la altura </label>
<input type="number" name= "num2" >
<br>
<br>

<select name="operar" id="opr">
<option value="sumar">V.Cilindro</option>
<option value="res">V.Cono</option>
<option value="mult">V.ESFERA</option>

</select>
<br>
<br>
<input type="submit" name= "volsolid" value ="calcular">
</form>
<h1>RESULTADOS</h1>
</body>
</html>

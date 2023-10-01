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

<form action ="recibir.php" method="GET">
    <label> OPERACIONES BASICAS</label>
   <br>
   <br>
   <label form ="num1"> num1: </label>
   <input type="number" name="num1" required>

<br>
<br>

<label for="num2"> num2:</label>
<input type="number" name= "num2" required>
<br>
<br>
<select name="operar" id="opr">
<option value="sumar">Sumar</option>
<option value="res">Restar</option>
<option value="mult">Multriplicar</option>
<option value="dividir">Dividir</option>
</select>
<br>
<br>
<input type="submit" name= "enviar" value ="calcular">
</form>
<h1>RESULTADOS</h1>
</body>
</html>

<!DOCTYPE html>
<html>
<link href="assets/style.css" rel="stylesheet" type="text/css">
<body>

<h2>Formulario de notas de los estudiantes</h2>

<form action="procesar.php" method="post">
  <label for="numEstudiantes">Número de tarjetas de datos:</label><br>
  <input type="number" id="numEstudiantes" name="numEstudiantes" min="1" required><br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>
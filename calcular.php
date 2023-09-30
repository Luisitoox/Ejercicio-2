<link href="assets/style.css" rel="stylesheet" type="text/css">

<?php
session_start();


$aprobadosMatematicas = 0;
$aprobadosFisica = 0;
$aprobadosProgramacion = 0;
$aplazadosMatematicas = 0;
$aplazadosFisica = 0;
$aplazadosProgramacion = 0;
$aprobadosTodas = 0;
$aprobadosUna = 0;
$aprobadosDos = 0;

// N es la variable del numero de estudiantes
$N = $_SESSION['numEstudiantes'];

for ($i = 0; $i < $N; $i++) {
    
    $A = $_POST['cedula'.$i];
    $B = $_POST['nombre'.$i];
    $C = $_POST['matematicas'.$i];
    $D = $_POST['fisica'.$i];
    $E = $_POST['programacion'.$i];

    if ($C >= 10) {
        $aprobadosMatematicas++;
    } else {
        $aplazadosMatematicas++;
    }

    if ($D >= 10) {
        $aprobadosFisica++;
    } else {
        $aplazadosFisica++;
    }

    if ($E >= 10) {
        $aprobadosProgramacion++;
    } else {
        $aplazadosProgramacion++;
    }

    $numAprobadas = ($C >= 10 ? 1 : 0) + ($D >= 10 ? 1 : 0) + ($E >= 10 ? 1 : 0);
    
    if ($numAprobadas == 3) {
        $aprobadosTodas++;
    } elseif ($numAprobadas == 2) {
        $aprobadosDos++;
    } elseif ($numAprobadas == 1) {
        $aprobadosUna++;
    }
}

// Resultados
echo "Aprobados en matemáticas: " . $aprobadosMatematicas . "<br>";
echo "Aplazados en matemáticas: " . $aplazadosMatematicas . "<br>";
echo "Aprobados en física: " . $aprobadosFisica . "<br>";
echo "Aplazados en física: " . $aplazadosFisica . "<br>";
echo "Aprobados en programación: " . $aprobadosProgramacion . "<br>";
echo "Aplazados en programación: " . $aplazadosProgramacion . "<br>";
echo "Alumnos que aprobaron todas las materias: " . $aprobadosTodas . "<br>";
echo "Alumnos que aprobaron una sola materia: " . $aprobadosUna . "<br>";
echo "Alumnos que aprobaron dos materias: " . $aprobadosDos . "<br>";
?>
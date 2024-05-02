<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=probandooo;host=127.0.0.1","root", "");

// Seleccionar los eventos del calendario
$sentenciaSQL= $pdo->prepare("SELECT * FROM mandale");
$sentenciaSQL->execute();

$resultado= $sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
echo json_encode($resultado);
?>
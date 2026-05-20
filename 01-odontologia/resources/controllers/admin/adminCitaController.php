<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $odontologo = $_POST['odontologo'];
    $servicio = $_POST['servicio'];

    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $nota = $_POST['nota'];

    $query = "INSERT INTO citas
    (
        odontologo_id,
        servicio_id,
        nombre,
        email,
        telefono,
        fecha,
        hora,
        nota
    )

    VALUES
    (
        '$odontologo',
        '$servicio',
        '$nombre',
        '$email',
        '$telefono',
        '$fecha',
        '$hora',
        '$nota'
    )";

    $resultado = mysqli_query($db, $query);

    if($resultado){
        echo "Cita registrada correctamente";
    }
}
?>
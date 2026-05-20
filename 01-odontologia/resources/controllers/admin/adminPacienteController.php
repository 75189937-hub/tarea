<?php

$idUsuario = $_SESSION['id'];


// TOTAL CITAS
$queryTotal = "SELECT COUNT(*) AS total 
FROM citas 
WHERE usuario_id = '$idUsuario'";

$total = mysqli_fetch_assoc(mysqli_query($db, $queryTotal));


// PENDIENTES
$queryPendientes = "SELECT COUNT(*) AS total 
FROM citas 
WHERE usuario_id = '$idUsuario'
AND estado = 'pendiente'";

$pendientes = mysqli_fetch_assoc(mysqli_query($db, $queryPendientes));


// CONFIRMADAS
$queryConfirmadas = "SELECT COUNT(*) AS total 
FROM citas 
WHERE usuario_id = '$idUsuario'
AND estado = 'confirmada'";

$confirmadas = mysqli_fetch_assoc(mysqli_query($db, $queryConfirmadas));


// COMPLETADAS
$queryCompletadas = "SELECT COUNT(*) AS total 
FROM citas 
WHERE usuario_id = '$idUsuario'
AND estado = 'completada'";

$completadas = mysqli_fetch_assoc(mysqli_query($db, $queryCompletadas));




// LISTAR CITAS
$queryCitas = "SELECT 
                citas.*,
                odontologos.nombres AS odontologo_nombre,
                servicios.nombre AS servicio_nombre
            FROM citas

            INNER JOIN odontologos
            ON citas.odontologo_id = odontologos.id

            INNER JOIN servicios
            ON citas.servicio_id = servicios.id

            WHERE citas.usuario_id = '$idUsuario'

            ORDER BY citas.fecha ASC";


$resultadoCitas = mysqli_query($db, $queryCitas);
<?php

require_once '../../includes/config.php';

$sql = "SELECT * FROM alumnos WHERE estatus != 0 AND grado = 1";
$query = $pdo->prepare($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);

for($i = 0;$i < count($data);$i++) {
    if($data[$i]['estatus'] == 1) {
        $data[$i]['estatus'] = '<span class="badge badge-success">Activo</span>';
    } else {
        $data[$i]['estatus'] = '<span class="badge badge-danger">Inactivo</span>';
    }

    $data[$i]['options'] = '';
}

echo json_encode($data,JSON_UNESCAPED_UNICODE);
die();

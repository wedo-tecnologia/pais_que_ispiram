<?php
    include('./connect.php');
    header('Content-Type: application/json;');
    $r = $con -> query('select * from img');
    $l = [];
    while($data = mysqli_fetch_assoc($r)){
        $l[] = [
            'id' => $data['id'],
            'dir' => $data['dir']
        ];
    }
    echo json_encode($l);
?>
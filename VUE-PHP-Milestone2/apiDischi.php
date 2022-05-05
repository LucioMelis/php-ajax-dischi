<?php
include('dischi.php');

header('Content-Type: application/json');
echo json_encode($arrayDischi);
?>
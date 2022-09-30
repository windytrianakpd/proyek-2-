<?php
include("connect.php");
$sql = mysqli_query($connect, "SELECT COUNT(*) AS jumlah FROM order_paket WHERE status = 'Diproses'");
$result = array();

while ($row = mysqli_fetch_assoc($sql)) {
    $data[] = $row;
}

echo json_encode(array("result" => $data));

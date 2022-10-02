<?php
include("connect.php");
$sql = mysqli_query($connect, "SELECT * FROM order_paket WHERE status = 'Diproses'");
$result = array();

while ($row = mysqli_fetch_assoc($sql)) {
    $data[] = $row;
}

// $timeAgo = new Westsworld\TimeAgo();
// echo $timeAgo->inWords(new DateTime($data['tanggal']));

echo json_encode(array("result" => $data));

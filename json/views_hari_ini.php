<?php
include("connect.php");
$sql = mysqli_query($connect, "SELECT COUNT(*) AS views FROM visitor_counter WHERE DATE(tanggal) = DATE(NOW())");
$result = array();

while ($row = mysqli_fetch_assoc($sql)) {
    $views = "";

    if ($row['views'] >= 0 && $row['views'] < 1000) {
        $views = $row['views'];
    } else if ($row['views'] >= 1000 && $row['views'] < 10000) {
        $views = substr($row['views'], 0, 1) . ",000";
    } else if ($row['views'] >= 10000 && $row['views'] < 100000) {
        $views = substr($row['views'], 0, 2) . ",000";
    } else if ($row['views'] >= 100000 && $row['views'] < 1000000) {
        $views = substr($row['views'], 0, 3) . ",000";
    } else if ($row['views'] >= 1000000 && $row['views'] < 10000000) {
        $awal = substr($row['views'], 0, 1) . ",";
        $tengah = substr($row['views'], 1, 3) . ",";
        $akhir = substr($row['views'], 4, 3);
        $views = $awal . $tengah . $akhir;
    } else if ($row['views'] >= 10000000 && $row['views'] < 100000000) {
        $awal = substr($row['views'], 0, 2) . ",";
        $tengah = substr($row['views'], 1, 3) . ",";
        $akhir = substr($row['views'], 4, 3);
        $views = $awal . $tengah . $akhir;
    }

    $data[] = $views;
}

echo json_encode(array("result" => $data));

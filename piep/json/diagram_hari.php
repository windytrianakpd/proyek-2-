<?php
include("connect.php");
$sql = mysqli_query($connect, "SELECT tanggal, COUNT(*) views FROM visitor_counter
GROUP BY MONTH(tanggal), DATE(tanggal) ORDER BY tanggal DESC LIMIT 7");
$result = array();

while ($row = mysqli_fetch_assoc($sql)) {
    $views = "";
    $date = date_create($row['tanggal']);

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

    date_default_timezone_set("Asia/Jakarta");
    $data['views'][] = $views;
    $tanggal = date_format($date, 'l');
    $tgl = date_format($date, 'j');

    if ($tanggal == "Monday") {
        $data['hari'][] = "Sen | " . $tgl;
    } else if ($tanggal == "Tuesday") {
        $data['hari'][] = "Sel | " . $tgl;
    } else if ($tanggal == "Wednesday") {
        $data['hari'][] = "Rab | " . $tgl;
    } else if ($tanggal == "Thursday") {
        $data['hari'][] = "Kam | " . $tgl;
    } else if ($tanggal == "Friday") {
        $data['hari'][] = "Jum | " . $tgl;
    } else if ($tanggal == "Saturday") {
        $data['hari'][] = "Sab | " . $tgl;
    } else {
        $data['hari'][] = "Min | " . $tgl;
    }
}
echo json_encode(array("result" => $data));

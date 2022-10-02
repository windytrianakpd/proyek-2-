<?php
include("connect.php");
$sql = mysqli_query($connect, "SELECT DATE(tanggal) AS tanggal, COUNT(*) views FROM visitor_counter
GROUP BY YEAR(tanggal), MONTH(tanggal) ORDER BY tanggal DESC LIMIT 12");
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
    $tanggalBulan = date_format($date, 'F');
    $tanggalTahun = date_format($date, 'Y');

    if ($tanggalBulan == "January") {
        $bulan = "Jan";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "February") {
        $bulan = "Feb";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "March") {
        $bulan = "Mar";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "April") {
        $bulan = "Apr";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "May") {
        $bulan = "Mei";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "June") {
        $bulan = "Jun";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "July") {
        $bulan = "Jul";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "August") {
        $bulan = "Agu";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "September") {
        $bulan = "Sep";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "October") {
        $bulan = "Okt";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "November") {
        $bulan = "Nov";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    } else if ($tanggalBulan == "December") {
        $bulan = "Des";
        $tahun = substr($tanggalTahun, -2, 2);

        $data['bulan'][] = $bulan . " | " . $tahun;
    }
}

echo json_encode(array("result" => $data));

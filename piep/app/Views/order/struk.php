<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            width: 100%;
        }

        th,
        td {
            border: 0px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>

<body>
    <table id="nama" class="table" style="width:100%;border: 0px;">
        <tbody>
            <tr>
                <td style="border: 0px;width:15%; text-align: center;"><img style="width: 120px;" src="../assets/upload/image/<?= $konfigurasi['icon'] ?>"></td>
                <td style="border: 0px;text-align: center;">
                    <p style="margin: 0px;font-size: 18px;"><?= $konfigurasi['tagline'] ?></p><br>
                    <p style="margin: 0px;font-size: 10px;"><strong>Email :</strong> <?= $konfigurasi['email'] ?>, <strong>Telephone :</strong> <?= $konfigurasi['telepon'] ?></p>
                </td>
                <td style="border: 0px;width:15%;"></td>
            </tr>
        </tbody>
    </table>
    <div style="padding-top: 5px;">
        <hr>
    </div>
    <div style="text-align: center;padding-bottom: 10px;">
        <h3>STRUK PEMESANAN PAKET</h3>
    </div>
    <div style="padding-left: 20px;padding-right: 20px;padding-bottom: 40px;">
        <table id="nota" class="table" style="width:100%;">
            <tr>
                <td style="width: 30%;">TANGGAL</td>
                <td style="width: 3%;">:</td>
                <td colspan="2"><?= $tanggal ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">NAMA PEMESAN</td>
                <td style="width: 3%;">:</td>
                <td colspan="2" style="text-transform: uppercase;"><?= $pemesan ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">NO HANDPHONE</td>
                <td style="width: 3%;">:</td>
                <td colspan="2"><?= $handphone ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">ALAMAT</td>
                <td style="width: 3%;">:</td>
                <td colspan="2"><?= $alamat ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">JENIS KATEGORI</td>
                <td style="width: 3%;">:</td>
                <td colspan="2" style="text-transform: uppercase;"><?= $kategori ?></td>
            </tr>

            <tr>
                <td style="width: 30%;">HARGA</td>
                <td style="width: 3%;">:</td>
                <td>Rp. <?php if ($harga >= 1000 && $harga < 10000) {
                            echo $harga;
                        } else if ($harga >= 10000 && $harga < 100000) {
                            echo substr($harga, 0, 2) . ".000";
                        } else if ($harga >= 100000 && $harga < 1000000) {
                            echo substr($harga, 0, 3) . ".000";
                        } else if ($harga >= 1000000 && $harga < 10000000) {
                            $awal = substr($harga, 0, 1) . ".";
                            $tengah = substr($harga, 1, 3) . ".";
                            $akhir = substr($harga, 4, 3);
                            echo $awal . $tengah . $akhir;
                        } ?> /bulan</td>
            </tr>
            <tr>
                <td style="width: 30%;">DISKON</td>
                <td style="width: 3%;">:</td>
                <td><?= $diskon ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">TOTAL</td>
                <td style="width: 3%;">:</td>
                <td>Rp. <?php if ($diskon_harga >= 1000 && $diskon_harga < 10000) {
                            echo $diskon_harga;
                        } else if ($diskon_harga >= 10000 && $diskon_harga < 100000) {
                            echo substr($diskon_harga, 0, 2) . ".000";
                        } else if ($diskon_harga >= 100000 && $diskon_harga < 1000000) {
                            echo substr($diskon_harga, 0, 3) . ".000";
                        } else if ($diskon_harga >= 1000000 && $diskon_harga < 10000000) {
                            $awal = substr($diskon_harga, 0, 1) . ".";
                            $tengah = substr($diskon_harga, 1, 3) . ".";
                            $akhir = substr($diskon_harga, 4, 3);
                            echo $awal . $tengah . $akhir;
                        } ?> /bulan</td>
            </tr>
        </table>
    </div>
    <div style="padding-left: 20px;padding-right: 20px;padding-bottom: 100px;">
        <table>
            <tr>
                <td style="width: 13%;font-size: 12px;"><strong>Catatan</strong></td>
                <td style="width: 2%;font-size: 12px;">:</td>
                <td style="width: 85%;font-size: 12px;">1. <?= $konfigurasi['namaweb'] ?> menyatakan struk ini sebagai bukti pemesanan paket.</td>
            </tr>
            <tr>
                <td style="width: 13%;font-size: 12px;"></td>
                <td style="width: 2%;font-size: 12px;"></td>
                <td style="width: 85%;font-size: 12px;">2. Gunakan struk pemesanan ini untuk konfirmasi pemesanan</td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <td style="width: 25%;"></td>
                <td style="width: 25%;"></td>
                <td style="width: 10%;"></td>
                <td style="width: 40%;text-align: center;"><?= $now ?></td>
            </tr>
            <div style="padding-top: 100px;"></div>
            <tr>
                <td style="width: 25%;"></td>
                <td style="width: 25%;"></td>
                <td style="width: 10%;"></td>
                <td style="width: 40%;text-align: center;">( Hormat Kami <?= $konfigurasi['namaweb'] ?>)</td>
            </tr>
        </table>
    </div>
</body>

</html>
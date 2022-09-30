<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th class="text-center" width="7%">No</th>
            <th class="text-center">Order</th>
            <th class="text-center" width="17%">Jenis</th>
            <th class="text-center" width="15%">Total</th>
            <th class="text-center">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($pesanan as $data) { ?>
            <tr>
                <td class="text-center"><small><?= $no ?>.</small></td>
                <td><small class="row">
                        <div class="col-md-2 pr-0">
                            <strong>Tanggal</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-9 pl-0 pr-0">
                            <?php
                            $tanggal = new DateTime($data['tanggal']);
                            echo $tanggal->format('l, j F Y - h:i:s A');
                            ?>
                        </div>
                        <div class="col-md-2 pr-0">
                            <strong>Pemesan</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-9 pl-0 pr-0">
                            <?= $data['pemesan'] ?>
                        </div>
                        <div class="col-md-2 pr-0">
                            <strong>Handphone</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-9 pl-0 pr-0">
                            <?= $data['handphone'] ?>
                        </div>
                        <div class="col-md-2 pr-0">
                            <strong>Alamat</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-9 pl-0 pr-0">
                            <?= $data['alamat'] ?>
                        </div>
                    </small></td>
                <td><small class="row">
                        <div class="col-md-5 pr-0">
                            <strong>Kategori</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0">
                            :
                        </div>
                        <div class="col-md-6 pl-0 pr-0">
                            <?= $data['kategori'] ?>
                        </div>
                        <div class="col-md-5 pr-0">
                            <strong>Harga</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0">
                            :
                        </div>
                        <div class="col-md-6 pl-0 pr-0">
                            Rp. <?php if ($data['harga'] >= 1000 && $data['harga'] < 10000) {
                                    echo $data['harga'];
                                } else if ($data['harga'] >= 10000 && $data['harga'] < 100000) {
                                    echo substr($data['harga'], 0, 2) . ".000";
                                } else if ($data['harga'] >= 100000 && $data['harga'] < 1000000) {
                                    echo substr($data['harga'], 0, 3) . ".000";
                                } else if ($data['harga'] >= 1000000 && $data['harga'] < 10000000) {
                                    $awal = substr($data['harga'], 0, 1) . ".";
                                    $tengah = substr($data['harga'], 1, 3) . ".";
                                    $akhir = substr($data['harga'], 4, 3);
                                    echo $awal . $tengah . $akhir;
                                } ?><br>
                        </div>
                        <div class="col-md-5 pr-0">
                            <strong>Diskon</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0">
                            :
                        </div>
                        <div class="col-md-6 pl-0 pr-0">
                            </strong><?= $data['diskon'] ?>
                        </div>
                    </small></td>
                <td><small class="row">
                        <div class="col-md-4 pr-0">
                            <strong>Harga</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-7 pl-0 pr-0">
                            Rp. <?php if ($data['total'] >= 1000 && $data['total'] < 10000) {
                                    echo $data['total'];
                                } else if ($data['total'] >= 10000 && $data['total'] < 100000) {
                                    echo substr($data['total'], 0, 2) . ".000";
                                } else if ($data['total'] >= 100000 && $data['total'] < 1000000) {
                                    echo substr($data['total'], 0, 3) . ".000";
                                } else if ($data['total'] >= 1000000 && $data['total'] < 10000000) {
                                    $awal = substr($data['total'], 0, 1) . ".";
                                    $tengah = substr($data['total'], 1, 3) . ".";
                                    $akhir = substr($data['total'], 4, 3);
                                    echo $awal . $tengah . $akhir;
                                } ?>
                        </div>
                    </small></td>
                <td>
                    <div class="bg-success d-flex justify-content-center" style="height: 35px;width: 100px;border-radius: 5px;padding-top: 7px;">
                        <small><?= $data['status'] ?></small>
                    </div>
                </td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>
<p>
    <a href="<?php echo base_url('admin/paket/tambah') ?>" class="btn btn-success">
        <i class="fa fa-plus"></i> Tambah Baru
    </a>
</p>

<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th class="text-center" width="5%">No</th>
            <th class="text-center" width="40%">Paket</th>
            <th class="text-center" width="25%">Harga</th>
            <th class="text-center" width="20%">Keterangan</th>
            <th width="18%"></th>
        </tr>
    </thead>
    <tbody>
        <?php $urut = 1;
        foreach ($paket as $paket) { ?>
            <tr>
                <td class="text-center"><small><?php echo $urut ?>.</small></td>
                <td>
                    <small class="row">
                        <div class="col-md-2 pr-0">
                            <strong>Nama</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-9 pl-0 pr-0">
                            <?php echo $paket['kategori'] ?>
                        </div>
                        <div class="col-md-2 pr-0">
                            <strong>Fasilitas</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-1 pr-0 pl-0">
                            <?php $no = 1;
                            foreach ($fasilitas as $data) { ?>
                                <?php if ($paket['id'] == $data['id_paket']) { ?>
                                    <?php echo $no . "."; ?><br>
                                <?php $no++;
                                } ?>
                            <?php } ?>
                        </div>
                        <div class="col-md-8 pl-0 pr-0">
                            <?php foreach ($fasilitas as $data) { ?>
                                <?php if ($paket['id'] == $data['id_paket']) { ?>
                                    <?php echo $data['fasilitas'] ?><br>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </small>
                </td>
                <td>
                    <small class="row">
                        <div class="col-md-5 pr-0">
                            <strong>Modul</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0">
                            :
                        </div>
                        <div class="col-md-6 pl-0 pr-0">
                            Rp. <?php if ($paket['modul_pembelajaran'] >= 1000 && $paket['modul_pembelajaran'] < 10000) {
                                    echo $paket['modul_pembelajaran'];
                                } else if ($paket['modul_pembelajaran'] >= 10000 && $paket['modul_pembelajaran'] < 100000) {
                                    echo substr($paket['modul_pembelajaran'], 0, 2) . ".000";
                                } else if ($paket['modul_pembelajaran'] >= 100000 && $paket['modul_pembelajaran'] < 1000000) {
                                    echo substr($paket['modul_pembelajaran'], 0, 3) . ".000";
                                } else if ($paket['modul_pembelajaran'] >= 1000000 && $paket['modul_pembelajaran'] < 10000000) {
                                    $awal = substr($paket['modul_pembelajaran'], 0, 1) . ".";
                                    $tengah = substr($paket['modul_pembelajaran'], 1, 3) . ".";
                                    $akhir = substr($paket['modul_pembelajaran'], 4, 3);
                                    echo $awal . $tengah . $akhir;
                                } ?>
                        </div>
                        <div class="col-md-5 pr-0">
                            <strong>Pendaftaran</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0">
                            :
                        </div>
                        <div class="col-md-6 pl-0 pr-0">
                            Rp. <?php if ($paket['pendaftaran'] >= 1000 && $paket['pendaftaran'] < 10000) {
                                    echo $paket['pendaftaran'];
                                } else if ($paket['pendaftaran'] >= 10000 && $paket['pendaftaran'] < 100000) {
                                    echo substr($paket['pendaftaran'], 0, 2) . ".000";
                                } else if ($paket['pendaftaran'] >= 100000 && $paket['pendaftaran'] < 1000000) {
                                    echo substr($paket['pendaftaran'], 0, 3) . ".000";
                                } else if ($paket['pendaftaran'] >= 1000000 && $paket['pendaftaran'] < 10000000) {
                                    $awal = substr($paket['pendaftaran'], 0, 1) . ".";
                                    $tengah = substr($paket['pendaftaran'], 1, 3) . ".";
                                    $akhir = substr($paket['pendaftaran'], 4, 3);
                                    echo $awal . $tengah . $akhir;
                                } ?>
                        </div>
                        <div class="col-md-5 pr-0">
                            <strong>Harga</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0">
                            :
                        </div>
                        <div class="col-md-6 pl-0 pr-0">
                            Rp. <?php if ($paket['harga'] >= 1000 && $paket['harga'] < 10000) {
                                    echo $paket['harga'];
                                } else if ($paket['harga'] >= 10000 && $paket['harga'] < 100000) {
                                    echo substr($paket['harga'], 0, 2) . ".000";
                                } else if ($paket['harga'] >= 100000 && $paket['harga'] < 1000000) {
                                    echo substr($paket['harga'], 0, 3) . ".000";
                                } else if ($paket['harga'] >= 1000000 && $paket['harga'] < 10000000) {
                                    $awal = substr($paket['harga'], 0, 1) . ".";
                                    $tengah = substr($paket['harga'], 1, 3) . ".";
                                    $akhir = substr($paket['harga'], 4, 3);
                                    echo $awal . $tengah . $akhir;
                                } ?>/bln
                        </div>
                        <div class="col-md-5 pr-0">
                            <strong>Diskon</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0">
                            :
                        </div>
                        <div class="col-md-6 pl-0 pr-0">
                            <?php echo $paket['diskon'] ?>
                        </div>
                    </small>
                </td>

                <td><small class="row">
                        <div class="col-md-4 pr-0">
                            <strong>Kategori</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-7 pl-0 pr-0">
                            <?php echo $paket['status'] ?>
                        </div>
                        <div class="col-md-4 pr-0">
                            <strong>Status</strong>
                        </div>
                        <div class="col-md-1 pr-0 pl-0 d-flex justify-content-center">
                            :
                        </div>
                        <div class="col-md-7 pl-0 pr-0">
                            <?php echo $paket['status_paket'] ?>
                        </div>
                    </small>
                </td>
                <td class="text-center">
                    <a href="<?php echo base_url('admin/paket/edit/' . $paket['id']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/paket/delete/' . $paket['id']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php $urut++;
        } ?>
    </tbody>
</table>
<?php include('tambah.php'); ?>
<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th width="5%">No</th>
            <th width="20%">Kategori</th>
            <th width="50%">Fasilitas</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($paket as $paket) { ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $paket['kategori'] ?>
                </td>
                <td><?php echo $paket['fasilitas'] ?></td>
                <td class="text-center">

                    <a href="<?php echo base_url('admin/kategori_paket/edit/' . $paket['id']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/kategori_paket/delete/' . $paket['id']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>
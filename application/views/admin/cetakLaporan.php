<?= $this->session->flashdata('message'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="laporan">

        <form action="" method="post" target="_blank">
            <div class="form-group justify-content-center">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="date1">Dari Tanggal</label>
                        <input type="date" class="form-control" id="date1" name="date1">
                        <?= form_error('date1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="date2">Sampai Tanggal</label>
                        <input type="date" class="form-control" id="date2" name="date2">
                        <?= form_error('date2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <button type="submit" name="cetak" class="btn btn-success">Cetak</button>
            <a href="<?= base_url('admin/lapTransaksi') ?>" class="btn btn-warning">Kembali</a>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
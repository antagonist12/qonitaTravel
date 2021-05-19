<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    <div class="row">

        <div class="col-lg-12">
            <!-- Content Column -->
            <div class="row justify-content-center">
                <div class="col-md-4 mx-3 my-3">
                    <h5>Bukti Pembayaran</h5>
                    <a href="<?= base_url('assets/img/pembayaran/') ?><?= $detailPembayaran['bukti_pembayaran']; ?>" target="_blank">
                        <img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/pembayaran/') ?><?= $detailPembayaran['bukti_pembayaran']; ?>" alt="#">
                    </a>
                </div>

                <div class="col-md-6 mx-3 my-3">
                    <h5>Nama Paket : <?= $detailPembayaran['nama_penyetor']; ?></h5>
                    <h5>Bank : <?= $detailPembayaran['bank']; ?></h5>
                    <h5>Total Pembelian : Rp. <?= number_format($detailPembayaran['total_pembelian']); ?></h5>
                    <p>Total Pembayaran : Rp. <?= number_format($detailPembayaran['jumlah_pembayaran']); ?></p>
                    <p>Tanggal Pembayaran : <?= date('d F Y', strtotime($detailPembayaran['tanggal_pembayaran'])); ?></p>
                    <?php if (($detailPembayaran['status_pembelian'] != 'Paid')) : ?>
                        <!-- penghapusan resi -->
                        <!-- <p>Resi Pembayaran : <?= $detailPembayaran['resi_pembelian']; ?></p> -->
                        <a href="<?= base_url('admin/lapTransaksi'); ?>" class="btn btn-warning">Kembali</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if (($detailPembayaran['status_pembelian'] == 'Paid')) : ?>
            <div class="col-lg">
                <form action="<?= base_url('admin/ubahResi') ?>" method="post">

                    <div class="col-sm-7">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $detailPembayaran['id_pembelian']; ?>">
                    </div>

                    <!-- penghapusan resi -->
                    <!-- <div class="form-group row">
                        
                                <label for="resi" class="col-sm-5 col-form-label">Resi Pembayaran</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="resi" name="resi" placeholder="Masukkan Resi Pembayaran" autocomplete="off" min="0">
                                    <?= form_error('resi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div> -->

                    <div class="form-group row">
                        <label for="status" class="col-sm-5 col-form-label">Status Pembayaran</label>
                        <div class="col-sm-7">
                            <select class="custom-select mr-sm-2" id="status" name="status">
                                <option value="" selected>Pilih Status Pembayaran</option>
                                <option value="Terjadi Kesalahan">Terjadi Kesalahan, Silahkan Ubah Pembayaran</option>
                                <option value="Lunas DP">Lunas DP</option>
                                <option value="Lunas">Lunas Total</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="proses">Proses</button>
                    <a href="<?= base_url('admin/lapTransaksi'); ?>" class="btn btn-warning">Kembali</a>
                </form>
            </div>
        <?php endif; ?>
    </div>
    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
</div>
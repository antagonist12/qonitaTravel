<?= $this->session->flashdata('message'); ?>
<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4>Konfirmasi Pembayaran</h4>
    <hr>

    <div class="row mt-3">
        <div class="col-md">
            <section class="section-one">

                <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="id_pembelian" name="id_pembelian" value="<?= $pembelian['id_pembelian']; ?>">

                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap Penyetor:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" autocomplete="off">
                            <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="bank">Nama Bank:</label>
                                <input type="text" class="form-control" id="bank" name="bank" placeholder="Masukkan Nama Bank" autocomplete="off">
                                <?= form_error('bank', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="jumlah">Jumlah Yang Dibayarkan (IDR) :</label><br>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Yang Dibayarkan" autocomplete="off">
                                <small class="text-info">Jumlah Yang Dibayarkan Minimal Rp 5jt.</small>
                                <br>
                                <?= form_error('jumlah', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row my-4">
                        <div class="col-sm-2">Bukti Pembayaran</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/pembayaran') ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="bukti" name="bukti">
                                        <label for="bukti" class="custom-file-label">Masukkan Bukti Pembayaran</label>
                                        <small class="text-info">Foto Bukti Pembarayan Max 2MB.</small>
                                        <br>
                                        <?= form_error('bukti', '<small class="text-danger pl-1">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- <label for="kode" class="col-sm-2 col-form-label">Kode Pembayaran:</label> -->
                        <div class="col-sm-10">
                            <input hidden class="form-control" id="kode" name="kode" value="<?= $pembelian['kode_pembelian']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Bayar!</button>
                            <a href="<?= base_url('user/riwayatTransaksi') ?>" class="btn btn-success button">Kembali</a>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

</div>
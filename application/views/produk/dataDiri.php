<?= $this->session->flashdata('message'); ?>

<div class="container mt-3">
    <h3>Qonita Tour & Travel</h3>
    <h4>Detail Pemesanan Paket</h4>
    <hr>

    <div class="row justify-content-center mt-5">
        <div class="col-lg">


            <form method="post" action="<?= base_url('produk/lanjutPesan') ?>">
                <?php $noPenumpang = 1; ?>
                <?php for ($i = 0; $i < $keranjang['jumbel']; $i++) : ?>
                    <label>Penumpang Ke - <?= $noPenumpang; ?></label>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Penumpang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama[]" id="nama" placeholder="Masukkan Nama Lengkap Penumpang..." autocomplete="off" required>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK Penumpang</label>
                        <div class="col-sm-10">
                            <input type="text" minlength="16" class="form-control" id="nik" name="nik[]" placeholder="Masukkan NIK Penumpang..." autocomplete="off" required>
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telf" class="col-sm-2 col-form-label">No. Telp Penumpang</label>
                        <div class="col-sm-10">
                            <input type="text" minlength="13" class="form-control" id="telf" name="telf[]" placeholder="Masukkan No. Telepon Penumpang..." autocomplete="off" required>
                            <?= form_error('telf', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat Penumpang</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Lengkap Penumpang..." cols="10" rows="3" required></textarea>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <br>
                    <?php $noPenumpang++ ?>
                <?php endfor; ?>

                <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-3">
                        <input readonly type="text" class="form-control" name="kodevalidasi" value="<?= $tokenPembayaran; ?>">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode" autocomplete="off" required>
                        <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Lanjutkan</button>
                        <a href="<?= base_url('produk/batalPesan') ?>" class="btn btn-warning button">Batal Pesan</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
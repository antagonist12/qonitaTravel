<?php

if ($user['id_user'] == NULL) {
    // $this->session->set_flashdata('message', '<script> alert("Silahkan Login Untuk Melakukan Pemesanan") </script>');
    $this->session->unset_userdata('keranjang');
    redirect('beranda');
    exit();
}

?>
<?= $this->session->flashdata('message'); ?>
<div class="container mt-3">
    <h3>Qonita Tour & Travel</h3>
    <h4>Keranjang Pemesanan Paket</h4>
    <hr>

    <div class="row justify-content-center mt-5">
        <div class="col-lg">
            <h4>Detail Pemesanan Paket</h4>
            <table class="table table-hover table-responsive-lg text-center justify-content-center">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga Paket</th>
                        <th scope="col">Jumlah Pemesanan</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <tr>
                        <th scope="row"><?= $nomor; ?></th>
                        <td><?= $keranjang['namaPaket']; ?></td>
                        <td><?= $keranjang['kategori']; ?></td>
                        <td>Rp. <?= number_format($keranjang['hargaPaket']); ?></td>
                        <td><?= $keranjang['jumbel']; ?> Tiket</td>
                        <td><?= date('d F Y', strtotime($keranjang['tanggal_pemesanan'])); ?></td>
                        <td>Rp. <?= number_format($subTotal = $keranjang['jumbel'] * $keranjang['hargaPaket']); ?></td>
                    </tr>
                    <?php $nomor++ ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg my-3">
            <a href="<?= base_url('produk/lanjutPesan') ?>" class="btn btn-primary button">Lanjutkan</a>
            <a href="<?= base_url('produk/batalPesan') ?>" class="btn btn-warning button">Batal Pesan</a>
        </div>
    </div>



</div>
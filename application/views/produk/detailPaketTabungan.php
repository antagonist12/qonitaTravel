<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Paket <?= $produk['name']; ?> </h4>
    <h3><?= $produk['nama']; ?></h3>


    <section class="section-one">

        <div class="container">
            <div class="isi">

                <div class="row mt-5 justify-content-center">
                    <div class="col-md-4 mb-3">
                        <a href="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" target="_blank">
                            <img src="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" class="d-block w-100 img">
                        </a>
                    </div>

                    <div class="col-md-4 mt-3">
                        <h5>Angsuran Tabungan</h5>
                        <ul>
                            <li>12x Angsuran ( 1 tahun ) DP Rp. 5.000.000,- <strong>Rp. 1.680.000 </strong> / bulan</li><br>
                            <li>24x Angsuran ( 2 tahun ) DP Rp. 4.000.000,- <strong>Rp. 875.000 </strong> / bulan</li><br>
                            <li>36x Angsuran ( 3 tahun ) DP Rp. 3.000.000,- <strong>Rp. 615.000 </strong> / bulan</li><br>
                            <li>48x Angsuran ( 4 tahun ) DP Rp. 2.000.000,- <strong>Rp. 480.000 </strong> / bulan</li><br>
                            <li>60x Angsuran ( 5 tahun ) DP Rp. 1.000.000,- <strong>Rp. 400.000 </strong> / bulan</li>
                        </ul>
                        <div class="my-5 mx-5">
                            <!-- <?php if ($produk['stok'] == 0) : ?>
                            <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                            <?php else : ?>
                            <a href="<?= base_url('produk/pesanPaketTour/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                            <?php endif; ?> -->
                            <a href="<?= base_url('produk/tabungan') ?>" class="btn btn-warning button">Kembali</a>
                        </div>
                    </div>

                    <!-- penjelasan detail tour ( berbeda setiap id ) -->
                </div>


                <!-- fasilitas dari paket-paket tour dibedakan dari idnya -->
                <?php if ($produk['id_produk'] == 'PR020') : ?>
                    <div class="row mt-5">
                        <div class="col-md">
                            <h4>Fasilitas Paket</h4>
                            <hr>

                            <div class="row">
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <img src="<?= base_url('assets/img/partner/qatar-airways-logo-preview.png') ?>" alt="Qatar Airways" class="img-fluid img-thumbnail">
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/golden_delux.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/golden_delux.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Golden Deluxe Hotel</small>
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/avrasya hotel.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/avrasya hotel.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Avrasya Hotel</h4>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/richmond pamukkale.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/richmond pamukkale.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Richmond Pamukkale Hotel</h4>
                                </div>

                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/riva taksim.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/riva taksim.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Riva Taksim Hotel</h4>
                                </div>

                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/tiara_termal.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/tiara_termal.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Tiata Termal Hotel</small>
                                </div>

                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/grand belish hotel.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/grand belish hotel.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Grand Belish Hotel</small>
                                </div>
                            </div>
                        </div>

                    </div>

                <?php elseif ($produk['id_produk'] == 'PR021') : ?>
                    <div class="row mt-5">
                        <div class="col-md">
                            <h4>Fasilitas Paket</h4>
                            <hr>

                            <div class="row">
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <img src="<?= base_url('assets/img/partner/turkishAirlines.png') ?>" alt="Turkish Airlines" class="img-fluid img-thumbnail">
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/kyriad_hotel.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/kyriad_hotel.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Kyriad Massy Paris Hotel</h4>
                                </div>
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/nh marquette.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/nh marquette.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>NH Marquette Hotel</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/leonardo.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/leonardo.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Leonardo Hotel</h4>
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/terase hotel.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/terase hotel.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Terase Hotel</h4>
                                </div>
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/ih hotel milano.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/ih hotel milano.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>IH Milano Hotel</small>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>
            </div>
        </div>

</div>
</div>

</section>

<div class="modal fade" id="fasilitasHaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fasilitas Haji</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tas Troli Bagasi Dan Kabin</li>
                    <li class="list-group-item">Tas Paspor</li>
                    <li class="list-group-item">Tas Serbaguna</li>
                    <li class="list-group-item">Kain Ihram / Mukena Atasan Dan Bergo</li>
                    <li class="list-group-item">Kain Batik Seragam</li>
                    <li class="list-group-item">Buku Doa & Buku Panduan Perjalanan</li>
                    <li class="list-group-item">ID Card</li>
                    <li class="list-group-item">Cover Paspor</li>
                    <li class="list-group-item">Souvenir</li>
                </ul>
                <small>(*)Semua Fasilitas Diatas Bersifat Sementara Dan Dapat Berubah Sewaktu-waktu</small>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="persyaratanHaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Persyaratan Haji</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Mengisi Formulir Pendaftaran Haji</li>
                    <li class="list-group-item">Membayar DP / Uang Muka Sebesar $6000 USD</li>
                    <li class="list-group-item">Photocopy Kartu Tanda Penduduk & Kartu Keluarga Sebanyak 4 (Empat) Lembar</li>
                    <li class="list-group-item">Photocopy Paspor Sebanyak 3 (Tiga) Lembar Dengan Ketentuan Nama Minimal 3(Tiga) kata contoh : <strong>Gebby Qonita Pareira.</strong> Dan Masih Berlaku Minimal 6 Bulan Dari Tanggal Keberangkatan</li>
                    <li class="list-group-item">Pas Photo Terbaru (Latar Belakang / Background Berwarna Putih Dan Yang Wanita Harus Memakai Hijab Warna) Dengan Ukuran 4x6 Sebanyak 6 (Enam) Lembar Dan Ukuran 3x4 Sebanyak 2(Dua) Lembar</li>
                    <li class="list-group-item">Photocopy Akte Lahir Atau Buku Nikah Sebanyak 2(Dua) Lembar</li>
                    <li class="list-group-item">Surat Kesehatan</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Login Modal -->
<div class="modal fade" id="masukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Qonita Travel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('beranda/userLogin'); ?>">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <a href="<?= base_url('beranda/daftar'); ?>" class="badge badge-info">Daftar Member</a> |
                <a href="<?= base_url('beranda/lupaPassword'); ?>" class="badge badge-warning">Lupa Password?</a>
            </div>
        </div>
    </div>
</div>x
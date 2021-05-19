<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Paket <?= $produk['name']; ?> </h4>
    <h3><?= $produk['nama']; ?></h3>


    <section class="section-one">

        <div class="container">
            <div class="isi">

                <div class="row mt-5 mb-3 justify-content-center">
                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" target="_blank">
                            <img src="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" class="d-block w-100 img">
                        </a>
                    </div>

                    <div class="col-md-4 mt-3">
                        <!-- akomodasi + destinasi dibedakan dari paketnya -->
                        <?php if ($produk['id_produk'] == 'PR017') : ?>
                            <h5>Akomodasi</h5>
                            <ul>
                                <li>Hotel Di Madinah, <span>Dar Eiman Al Manar</span> </li>
                                <li>Hotel Di Mekah, <span>Anjum Hotel</span> </li>
                                <li>Hotel Di Istanbul, <span>Titanic Hotel</span> </li>
                                <li>Hotel Di Bursa, <span>Ramda Hotel</span> </li>
                            </ul>
                        <?php elseif ($produk['id_produk'] == 'PR018') : ?>
                            <h5>Akomodasi</h5>
                            <ul>
                                <li>Hotel Di Madinah, <span>Al - Harram</span> </li>
                                <li>Hotel Di Mekah, <span>Dar Royal Eiman</span> </li>
                            </ul>
                        <?php elseif ($produk['id_produk'] == 'PR024') : ?>
                            <h5>Destinasi</h5>
                            <ul>
                                <li>Amman </li>
                                <li>Petra </li>
                                <li>Hebron</li>
                                <li>Jerusalem </li>
                                <li>Mt. Sinai </li>
                                <li>Alexandria </li>
                                <li>Cairo </li>
                            </ul>
                        <?php endif; ?>
                        <h5>Include</h5>
                        <ul>
                            <li>Tiket Internasional by Economy Class</li>
                            <li>Bagasi 30 Kg (sesuai peraturan penerbangan)</li>
                            <li>Hotel *4 & *5 (Quad) & Transportasi Bus ber AC</li>
                            <li>Manasik 1 kali</li>
                            <li>Muthawif/ pembimbing berpengalaman</li>
                            <li>Ziarah Madinah-Mekkah & City Tour Jeddah</li>
                            <li>Perlengkapan Umroh</li>
                            <li>Makan sesuai program (3 kali sehari)</li>
                            <li>Tour Leader dari Indonesia</li>
                            <li>Visa Umroh</li>
                            <li>Air Zam Zam 5 liter</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h5>Exclude</h5>
                        <ul>
                            <li>Dokummen perjalanan </li>
                            <li>Suntik meningitis</li>
                            <li>Airport handling, Asuransi & Tipping, dan lounge (senilai Rp. 850.000)</li>
                            <li>Kelebihan bagasi & pengeluaran pribadi</li>
                        </ul>

                        <div class="my-5 mx-5">
                            <?php if ($produk['stok'] == 0 || $tanggal['tanggal'] < date('Y-m-h')) : ?>
                                <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                            <?php else : ?>
                                <a href="<?= base_url('produk/pesanPaketUmroh/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                            <?php endif; ?>
                            <a href="<?= base_url('produk/umroh') ?>" class="btn btn-warning button">Kembali</a>
                        </div>
                    </div>
                </div>

                <!-- fasilitas paket umroh dibedakan dari idnya -->
                <?php if ($produk['id_produk'] == 'PR017') : ?>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h4>Fasilitas Paket</h4>
                            <hr>

                            <div class="row justify-content-center">
                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/ramada.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/ramada.jpg') ?>" alt="Ramda Hotel" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Ramda Hotel</h4>
                                </div>
                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/4_4.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/4_4.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Dar Eiman Al Manar Hotel</small>
                                </div>

                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/anjum.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/anjum.jpg') ?>" alt="Anjum Hotel" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Anjum Hotel</small>
                                </div>

                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/titanic.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/titanic.jpg') ?>" alt="Titanic Hotel" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Titanic Hotel</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xs-3 col-md-3 my-3">
                            <a href="<?= base_url('assets/img/partner/turkishAirlines.png') ?>" target="_blank">
                                <img src="<?= base_url('assets/img/partner/turkishAirlines.png') ?>" alt="Turkish Airlines" class="img-fluid img-thumbnail">
                            </a>
                            <h4>Turkish Airlines</h4>
                        </div>
                    </div>


                <?php elseif ($produk['id_produk'] == 'PR018') : ?>
                    <div class="row mt-5">
                        <div class="col-md">
                            <h4>Fasilitas Paket</h4>
                            <hr>

                            <div class="row justify-content-center">
                                <div class="col-xs-34 col-md-3 mb-3">
                                    <img src="<?= base_url('assets/img/partner/saudia.jpg') ?>" alt="Saudia Airlines" class="img-fluid img-thumbnail">
                                    <h4>Saudia Airlines</h4>
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/4_1.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/4_1.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Al - Harram Hotel</h4>
                                </div>
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/4_3.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/4_3.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Dar Royal Eiman Hotel</small>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>
            </div>

        </div>
</div>

</section>


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
</div>
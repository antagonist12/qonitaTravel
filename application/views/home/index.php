<?= $this->session->flashdata('message'); ?>

<!-- Carousel -->
<div class="top">
    <!-- carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slider/0.jpg'); ?>" class="d-block img-fluid" width="1500px" height="684px">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider/1.jpg'); ?>" class="d-block img-fluid" width="1500px" height="684px">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider/2.JPG'); ?>" class="d-block img-fluid" width="1500px" height="684px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Page Content -->
<section class="section-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-3 pb-3">
                <div class="logo mx-auto text-center">
                    <img class="img-fluid" src="<?= base_url('assets/img/qonitaq.png') ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <h3>Qonita Haji Tour And Travel</h3>
                <hr>
                <p>
                    Pada tahun 2013 berdiri PT. Qonita Zikra Semesta bergerak dibidang jasa perjalanan wisata. Qonita Travel befokus memberikan pelayanan prima untuk perjalanan dan pengalaman haji, umroh, dan wisata muslim terbaik. Sebagai sebuah perusahaan professional, kami selalu mempriotaskan keamanan dan kenyamanan Jemaah dan wisatawan. Kami memahami kekhawatiran masyarakat terhadap maraknya biro travel haji dan umroh yang hanya mengedapankan keuntungan semata dengan cara-cara yang merugikan klien. Oleh karena itu, kami selalu memastikan aspek kredibilitas, transparan, dan akuntabel. Salah satunya dengan ijin operasional baik dari Kementerian Hukum dan Ham, Kementerian Pariwisata, maupun Kementerian Agama.
                </p>
                <!-- <a class="btn btn-primary btn-lg mt-3 button" href="<?= base_url('beranda/about'); ?>">About Us &raquo;</a> -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>

<!-- card -->
<section class="section-two bg-primary">
    <div class="container">
        <div class="row pt-3 pb-3 text-center">
            <div class="col-sm-4 mb-3">
                <div class="card w-70">
                    <img class="card-img-top" src="<?= base_url('assets/img/service/haji.jpg'); ?>">
                    <div class="card-body">
                        <h3 class="card-title">Haji</h3>
                        <a href="<?= base_url('produk/haji'); ?>" class="btn btn-primary button">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card w-70">
                    <img class="card-img-top" src="<?= base_url('assets/img/service/umrah.jpg'); ?>">
                    <div class="card-body">
                        <h3 class="card-title">Umroh</h3>
                        <a href="<?= base_url('produk/umroh'); ?>" class="btn btn-primary button">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card w-70">
                    <img class="card-img-top" src="<?= base_url('assets/img/service/wisata.jpg'); ?>">
                    <div class="card-body">
                        <h3 class="card-title">Halal Tour</h3>
                        <a href="<?= base_url('produk/tour'); ?>" class="btn btn-primary button">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>

<!-- penghargaan -->
<section class="section-three bg-light">
    <div class="container">
        <div class="mt-3">
            <h3>Penghargaan Kami</h3>
            <hr>
            <div class="row">
                <div class="col-md-12 mb-3 mx-auto text-center">
                    <img src="<?= base_url('assets/img/service/penghargaan.jpeg'); ?>" class="img-fluid">
                </div>
                <div class="col-md-12 mb-3">
                    <h3>KAN</h3>
                    <h4>( Komite Akreditasi Nasional )</h4>
                    <p>Memberikan Sertifikat Penghargaan Kepada PT. Qonita Zikra Semesta Jakarta sebagai Biro Travel yang telah Mengimplementasikan standar SNI ISO/IEC 17021-2011</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- info -->
<section class="section-four">
    <div class="container">
        <div>
            <div class="row justify-content-center">
                <div class="col mb-4 mt-3">
                    <h3>Kenapa Harus Qonita ?</h3>
                    <hr>
                    <h4>Alasan Untuk Mempercayakan Perjalanan Haji & Umroh Serta Tour Kepada Kami</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>Pimpinan Qonita menjadi asesor untuk sertifikasi Tour Leader</li>
                        <li>100% memberangkatkan calon jamaah sesuai jadwal</li>
                        <li>Seluruh Tour Leader QONITA sudah ter Sertifikasi BNSP</li>
                        <li>Untuk Perjalanan Umroh selalu menggunakan Maskapai yg Direct Trip (No Transit)</li>
                        <li>Menu masakan Indonesia menjadi Pilihan Utama Bagi seluruh Tamu/Jamaah Qonita</li>
                        <li>Bus Tahun terbaru sebagai sarana Transportasi</li>
                        <li>Pelayanan Handling terbaik, mulai dari Jakarta sampai kembali Ke Jakarta oleh team yang ramah</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Pengalaman lebih dari 5 tahun, yang dibuktikan dengan melayani ribuan jamaah</li>
                        <li>Perlengkapan Haji & Umroh yang komplit dan berkualitas</li>
                        <li>Mendapatkan asuransi perjalanan</li>
                        <li>Mengunjungi berbagai tempat wisata bersejarah</li>
                        <li>Miqat umroh gratis (jaronah, hudaibiyah, tanim)</li>
                        <li>Album kenangan perjalanan</li>
                        <li>Menjunjung tinggi prinsip Aman, Nyaman, dan Terpercaya</li>
                        <li>Banyak Artis dan Public Figure yang mempercayakan QONITA sebagai mitra Perjalanan Ibadah Umroh dan Haji</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- <div class="paralax"></div> -->

<!-- pengalaman -->
<section class="section-five text-center">
    <div class="container">
        <div class="mt-3">
            <h3>Pengalaman Kami</h3>
            <hr>
            <div class="row mb-3">
                <div class="col-md-4">
                    <i class="fas fa-users"></i>
                    <p>Jumlah Jamaah Yang Selalu Bertambah</p>
                </div>
                <div class="col-md-4">
                    <i class="far fa-calendar-check"></i>
                    <p>Pembinaan Pada Calon Jamaah</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-thumbs-up"></i>
                    <p>Berpengalaman , Jujur , Transparan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimoni -->
<section class="section-six text-center bg-light">
    <div class="container">
        <div class="mt-3 py-3">
            <h3>Testimoni</h3>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h3>Andi</h3>
                    <h3>(Jurnalis)</h3>
                    <h5>" Sangat murah dan pelayanan sangat baik. Saya sangat puas atas Paket Umroh Qonita Thanks. "</h5>
                </div>
                <div class="col-md-6">
                    <h3>Khairuddin</h3>
                    <h3>(Mahasiswa)</h3>
                    <h5>" Terima kasih Qonita, pelayanan bagus ibadah lancar. Paket makan pun Indonesia banget. "</h5>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 mb-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hGKcZbzL_jU"></iframe>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZF7eHdwDL-M"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cUCB73Ipfsw"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- perlengkapan dan partner -->
<section class="section-seven">
    <div class="container">
        <div class="mt-3">
            <div class="row justify-content-center">
                <div class="col-12 mb-3 text-center py-2">
                    <i class="fas fa-suitcase-rolling"> Perlengkapan</i>
                    <hr>
                    <div class="row justify-content-center perlengkapan">
                        <div class="col-lg-4 mb-3 text-center">
                            <a href="<?= base_url('assets/img/perlengkapan/Kain Ihram Qonita.jpeg') ?>" target="_blank">
                                <img src="<?= base_url('assets/img/perlengkapan/Kain Ihram Qonita.jpeg') ?>" class="d-block w-100 img">
                                <span>Kain Ihram Qonita</span>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3 text-center">
                            <a href="<?= base_url('assets/img/perlengkapan/koper dan tas fasilitas dari Qonita.jpeg') ?>" target="_blank">
                                <img src="<?= base_url('assets/img/perlengkapan/koper dan tas fasilitas dari Qonita.jpeg') ?>" class="d-block w-100">
                                <span>Koper dan Tas Qonita</span>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3 text-center">
                            <a href="<?= base_url('assets/img/perlengkapan/Fasilitas Qonita Untuk Jamaah.jpeg') ?>" target="_blank">
                                <img src="<?= base_url('assets/img/perlengkapan/Fasilitas Qonita Untuk Jamaah.jpeg') ?>" class="d-block w-100">
                                <span>Fasilitas Lengkap Qonita</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-eight">
    <div class="container">
        <div class="mt-3">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-3 text-center partner py-3">
                    <i class="fas fa-plane"> Partner Kami</i>
                    <hr>
                    <div class="row">
                        <div class="col-xs-4 col-md-4 mb-3">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/mandiri.jpg') ?>">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/dar1.jpg') ?>">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/rayanna.jpg') ?>">
                        </div>

                        <div class="col-xs-4 col-md-4 mb-3">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/elaf.jpg') ?>">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/dar2.jpg') ?>">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/saudia.jpg') ?>">
                        </div>

                        <div class="col-xs-4 col-md-4 mb-3">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/millenium.jpg') ?>">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/dar3.jpg') ?>">
                            <img class="rounded mx-auto d-block" src="<?= base_url('assets/img/partner/garuda.jpg') ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email..." autocomplete="off">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password..." autocomplete="off">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
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





<!-- /.container -->
<!-- Header -->
<div class="header">
   <nav class="navbar navbar-light">
      <div class="container">
         <!-- <a class="navbar-brand instagram" href="https://instagram.com/qonitaTravel">
            <i class="fab fa-instagram"> qonitaTravel </i>
         </a> -->
         <a class="navbar-brand facebook" href="https://www.facebook.com/QonitaTravel">
            <i class="fab fa-facebook"> QonitaTravel </i>
         </a>
         <a class="navbar-brand whatsapp" href="https://api.whatsapp.com/send?phone=62851782435458&text=&source=&data=">
            <i class="fab fa-whatsapp"> +62 85781435458 </i>
         </a>
         <a class="navbar-brand twitter" href="https://twitter.com/qonitaTravel">
            <i class="fab fa-twitter"> qonitaTravel </i>
         </a>
      </div>
   </nav>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light">
   <div class="container">
      <a class="navbar-brand" href="<?= base_url('beranda'); ?>">
         <img src="<?= base_url('assets/img/profile/logos.png'); ?>" width="65" height="35" class="d-inline-block align-top">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= base_url('beranda'); ?>">Beranda
               <span class="sr-only">(current)</span>
            </a>
            <a class="nav-item nav-link" href="<?= base_url('galeri'); ?>">Galeri</a>
            <a class="nav-item nav-link" href="<?= base_url('fasilitas'); ?>">Fasilitas</a>

            <div class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Layanan
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?= base_url('produk/haji'); ?>">Haji</a>
                  <a class="dropdown-item" href="<?= base_url('produk/umroh'); ?>">Umroh</a>
                  <a class="dropdown-item" href="<?= base_url('produk/tour'); ?>">Tour</a>
                  <a class="dropdown-item" href="<?= base_url('produk/tabungan'); ?>">Tabungan</a>
               </div>
            </div>

         </div>
         <div class="navbar-nav ml-auto">
            <?php if ($user['name']) : ?>
               <div class="nav-item dropdown">
                  <a class="nav-link nav-item btn btn-light user" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?= $user['name']; ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="<?= base_url('user/profile'); ?>">Profile</a>
                     <a class="dropdown-item" href="<?= base_url('user/riwayatTransaksi'); ?>">Riwayat Transaksi</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="<?= base_url('beranda/logoutUser'); ?>">Logout</a>
                  </div>
               </div>
            <?php else : ?>
               <a class="nav-item btn btn-light mdl" data-toggle="modal" data-target="#masukModal">
                  Masuk
               </a>
            <?php endif; ?>
            <!-- <a class="nav-item nav-link" href="<?= base_url('auth'); ?>">Masuk</a> -->
            <!-- <a class="nav-item nav-link" href="<?= base_url('auth/registration'); ?>">Daftar</a> -->
         </div>
      </div>
   </div>
</nav>
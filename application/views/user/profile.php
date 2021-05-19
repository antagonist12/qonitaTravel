<div class="container mt-3">

    <h3><?= $tittle; ?></h3>
    <hr>
    <?= $this->session->flashdata('message'); ?>

    <div class="row profile mt-5">

        <div class="col-md">
            <h2><?= $user['name']; ?></h2>
            <h5>Email : <?= $user['email']; ?></h5>
            <h5>No. Telepon : <?= $user['no_telf']; ?></h5>
            <h5>Alamat : <?= $user['alamat']; ?></h5>
            <h5>Member Dari : <?= date('d F Y', strtotime($user['date_created'])); ?></h5>
            <a href="<?= base_url('user/gantiProfile') ?>"><button class="btn btn-info">Ganti Profile</button></a>
            <a href="<?= base_url('user/gantiPassword') ?>"><button class="btn btn-warning">Ganti Password</button></a>
            <a href="<?= base_url() ?>"><button class="btn btn-dark">Kembali</button></a>
        </div>

        <div class="col-md">
            <img src="<?= base_url('assets/img/profile/') ?><?= $user['image']; ?>" alt="Profile Picture" class="img-circle img-fluid img-responsive">
        </div>
    </div>
</div>
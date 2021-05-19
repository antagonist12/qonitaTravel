<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="profile picture">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Nama Admin : <?= $user['name']; ?></h5>
                    <p class="card-text">Email Admin : <?= $user['email']; ?></p>
                    <p class="card-text">No. Telp Admin : <?= $user['no_telp']; ?></p>
                    <p class="card-text"><small class="text-muted">Admin Created <?= date('d F Y', strtotime($user['date_created'])); ?></small></p>
                    <a href="<?= base_url('admin/editProfile') ?>" class="badge badge-dark">Edit Profile</a>
                    <a href="<?= base_url('admin/gantiPassword') ?>" class="badge badge-warning">Change Password</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
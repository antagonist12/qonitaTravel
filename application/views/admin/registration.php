<?= $this->session->flashdata('message'); ?>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Admin!</h1>
                        </div>
                        <form class="user" action="<?= base_url('admin/registration'); ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Masukkan Nama Anda" value="<?= set_value('name'); ?>" autocomplete="off">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email Anda" value="<?= set_value('email'); ?>" autocomplete="off">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="Masukkan No. Telp Anda" value="<?= set_value('no_telp'); ?>" autocomplete="off">
                                <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukkan Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Tambah Admin
                            </button>
                            <a class="btn btn-info btn-user btn-block" href="<?= base_url('admin'); ?>">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
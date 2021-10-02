<div id="layoutAuthentication_content">
    <main>
        <div class="container mb-4">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Buat Akun</h3>
                        </div>
                        <?= $this->session->flashdata('message') ?>
                        <div class="card-body">
                            <form action="<?= base_url('Auth/regist') ?>" method="post">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="text" placeholder="NIP" name="nip" />
                                    <label for="inputtext">NIP</label>
                                    <?= form_error('nip', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputtext" type="text" placeholder="Nama Lengkap" name="nama" />
                                    <label for="inputtext">Nama Lengkap</label>
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputtext" type="text" placeholder="Unit Kerja" name="unit_kerja" />
                                    <label for="inputtext">Unit Kerja </label>
                                    <?= form_error('unit_kerja', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputtext" type="text" placeholder="Jabatan" name="jabatan" />
                                    <label for="inputtext">Jabatan</label>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputtext" type="text" placeholder="email" name="email" />
                                    <label for="inputtext">Email</label>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Buat Sandi" name="sandi" />
                                            <label for="inputPassword">Buat Sandi</label>
                                            <?= form_error('sandi', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPasswordConfirm" name="sandi2" type="password" placeholder="Konfirmasi Sandi" />
                                            <label for="inputPasswordConfirm">Konfirmasi Sandi</label>
                                            <?= form_error('sandi2', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-3">
                                    <div class="d-grid"><button class="btn btn-primary btn-user btn-block" type="submit">
                                            Registrasi
                                        </button></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="<?= base_url('Auth') ?>">Sudah Memiliki Akun ? Ke Halaman Masuk</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
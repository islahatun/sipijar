<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Masuk</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('Auth') ?>" method="post">
                                    <div class="col-auto">
                                        <div class="input-group flex-nowrap mb-2">
                                            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="NIP" aria-label="Username" aria-describedby="addon-wrapping" name="nip">
                                        </div>
                                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small>') ?>
                                        <div class="col-auto">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
                                                <input type="password" class="form-control" placeholder="Sandi" aria-label="Username" aria-describedby="addon-wrapping" name="sandi">
                                            </div>
                                            <?= form_error('sandi', '<small class="text-danger pl-3">', '</small>') ?>
                                            <div class="d-flex align-items-center justify-content-end mt-4 mb-3">
                                                <button class="btn btn-primary">Login</button>
                                            </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url('Auth/Regist') ?>">Belum Mempunyai AKun? Daftar Sekarang!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
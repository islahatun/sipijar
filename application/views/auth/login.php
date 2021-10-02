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
                                <form>
                                    <div class="col-auto">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text m-lg-1"><i class="far fa-user"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="NIP" name="nip">
                                        </div>
                                        <div class="col-auto">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text m-lg-1"><i class="fas fa-unlock-alt"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="sandi" name="sandi">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end mt-4 mb-3">
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url('Auth/Regist') ?>">Belum Mempunyai AKun? Daftar!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
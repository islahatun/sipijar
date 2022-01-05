<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid ">
            <div class="row">
                <div class="mt-3">
                    <h2>Detail Pengajuan</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">NIP</label>
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label"><?= $detail['nip'] ?></label>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">NAMA</label>
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label"><?= $detail['nama'] ?></label>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">INSTANSI PENDIDIKAN</label>
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label"><?= $detail['instansi_pendidikan'] ?></label>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">PROGRAM KULIAH</label>
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label"><?= $detail['program_kuliah'] ?></label>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">NO SK REKOMENDASI</label>
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label"><?= $detail['no_sk'] ?></label>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-3">
                        <label for="inputPassword6" class="col-form-label">TANGGAL SK REKOMENDASI</label>
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label"><?= $detail['tgl_rekomendasi'] ?></label>
                    </div>
                </div>
                <div class="col">
                    <form action="">
                        <table class="table table-bordered  mt-3">

                            <tr>
                                <th>SK PNS</th>
                                <td>
                                    <a href="<?= base_url('assets/assets/pengajuan/' . $detail['sk_pns']) ?>" class="btn btn-primary">Lihat </a> <?= $detail['sk_pns'] ?>
                                </td>
                                <td>

                                    <!-- <?php if ($sts['sts_sk_pns'] == 1) { ?>
                                        <div>
                                            <button class="btn btn-success" disabled><i class="fas fa-check"></i></button>
                                        </div>
                                    <?php } else if ($sts['sts_sk_pns'] == 0) { ?>
                                        <button class="btn btn-success" disabled><i class="fas fa-times"></i></button>
                                    <?php } else { ?>
                                        <form action="<?= base_url('Pengajuan/sk') ?>" method="post">
                                            <input type="text" value="<?= $detail['id_pengajuan'] ?>" hidden>
                                            <input type="text" value="<?= $detai['nip'] ?>" hidden>
                                            <input type="text" value="1" name="sts_sk_pns" hidden>
                                            <button class="btn btn-primary">Acc</button>
                                        </form>
                                    <?php } ?> -->

                                </td>
                            </tr>
                            <tr>
                                <th>SK Rekomendasi</th>
                                <td><a href="<?= base_url('assets/assets/pengajuan/' . $detail['sk_rekom']) ?>" class="btn btn-primary">Lihat</a> </a> <?= $detail['sk_rekom'] ?>
                                </td>
                                <td>
                                    <!-- <?php if ($sts['sts_sk_rekom'] == 1) { ?>
                                        <div>
                                            <button class="btn btn-success" disabled><i class="fas fa-check"></i></button>
                                        </div>
                                    <?php } else if ($sts['sts_sk_rekom'] == 0) { ?>
                                        <button class="btn btn-danger" disabled><i class="fas fa-times"></i></button>
                                    <?php } else { ?>
                                        <form action="<?= base_url('Pengajuan/sk') ?>" method="post">
                                            <input type="text" value="<?= $detail['id_pengajuan'] ?>" hidden>
                                            <input type="text" value="<?= $detai['nip'] ?>" hidden>
                                            <input type="text" value="1" name="sts_sk_rekom" hidden>
                                            <button class="btn btn-primary">Acc</button>
                                        </form>
                                    <?php } ?> -->
                                </td>
                            </tr>
                            <tr>
                                <th>SK PTN</th>
                                <td><a href="<?= base_url('assets/assets/pengajuan/' . $detail['sk_ptn']) ?>" class="btn btn-primary">Lihat</a> </a> <?= $detail['sk_ptn'] ?>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <th>Jadwal Kuliah</th>
                                <td><a href="<?= base_url('assets/assets/pengajuan/' . $detail['jadwal_kuliah']) ?>" class="btn btn-primary">Lihat</a> </a> <?= $detail['jadwal_kuliah'] ?>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <th>SK Akreditasi</th>
                                <td><a href="<?= base_url('assets/assets/pengajuan/' . $detail['sk_akreditasi']) ?>" class="btn btn-primary">Lihat</a> </a> <?= $detail['sk_akreditasi'] ?>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div>
                <form action="<?= base_url('Pengajuan/acc/' . $detail['id_pengajuan']) ?>" method="post">
                    <span>
                        <input type="text" value="<?= $detail['id_pengajuan'] ?>" hidden>
                        <input type="text" value="Persyaratan Sudah Lengkap" name="komentar" hidden>
                        <input type="text" value="Validasi Pengajuan" name="status" hidden>
                        <button class="btn btn-primary" name="acc" type="submit">Pengajuan Sudah Lengkap</button>
                    </span>
                    <span>
                        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#komentar">Pengajuan Belum Lengkap</a>
                    </span>
                </form>
            </div>

        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="komentar" tabindex="-1" aria-labelledby="komentarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="komentarLabel">Komentar</h5>

                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Pengajuan/acc/' . $detail['id_pengajuan']) ?>" method="post">
                        <div class="row  ">
                            <div class="row  ">
                                <input type="text" value="<?= $detail['id_pengajuan'] ?>" hidden>
                                <input type="text" value="Menunggu Perbaikan Pengajuan" name="status" hidden>
                                <div class="col">
                                    <textarea type="text" id="inputtext" class="form-control" name="komentar" required></textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
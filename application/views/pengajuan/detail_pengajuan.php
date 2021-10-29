<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid ">
            <div class="row">
                <div class="mt-3">
                    <h2>Detail Pengajuan</h2>
                </div>
                <div class="col">
                    <table class="table table-bordered  mt-3">
                        <tr>
                            <th style="width: 250px;">NIP</th>
                            <td><?= $detail['nip'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td><?= $detail['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama Instansi Pendidikan</th>
                            <td><?= $detail['instansi_pendidikan'] ?></td>
                        </tr>
                        <tr>
                            <th>Jenjang Pendidikan</th>
                            <td><?= $detail['jenjang_pendidikan'] ?></td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td><?= $detail['program_kuliah'] ?></td>
                        </tr>
                        <tr>
                            <th>SK PNS</th>
                            <td>
                                <a href="<?= base_url('assets/assets/pengajuan/' . $detail['sk_pns']) ?>" class="btn btn-primary">Lihat </a> <?= $detail['sk_pns'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>SK Rekomendasi</th>
                            <td><a href="<?= base_url('assets/assets/pengajuan/' . $detail['sk_rekom']) ?>" class="btn btn-primary">Lihat</a> </a> <?= $detail['sk_rekom'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>SK PTN</th>
                            <td><a href="<?= base_url('assets/assets/pengajuan/' . $detail['sk_ptn']) ?>" class="btn btn-primary">Lihat</a> </a> <?= $detail['sk_ptn'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Jadwal Kuliah</th>
                            <td><a href="<?= base_url('assets/assets/pengajuan/' . $detail['jadwal_kuliah']) ?>" class="btn btn-primary">Lihat</a> </a> <?= $detail['jadwal_kuliah'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>SK Akreditasi</th>
                            <td><a href="<?= base_url('assets/assets/pengajuan/' . $detail['sk_akreditasi']) ?>" class="btn btn-primary">Lihat</a> </a> <?= $detail['sk_akreditasi'] ?>
                            </td>
                        </tr>
                    </table>
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
                        <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#komentar">Pengajuan Bleum Lengkap</a>
                    </span>
                </form>
            </div>

        </div>
    </main>

    <div class="modal fade" id="komentar" tabindex="-1" aria-labelledby="tambahdataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahdataLabel">Komentar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                    <button type="submit" class="btn btn-primary">Beri Komentar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid ">
            <div class="row">
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
                <form action="">

                </form>
            </div>
        </div>
    </main>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="card text-dark bg-light mb-3 mt-3">
                <div class="card-header">Daftar Pengajuan</div>
                <div class="row">

                    <div class="col-4 mt-3 ml-3">
                        <?= $this->session->flashdata('message') ?>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIP</th>
                                <th scope="col">NAMA</th>
                                <?php if ($session['level'] == 'Pimpinan') { ?>
                                    <th scope="col">NOMOR SURAT</th>
                                <?php } else { ?>
                                    <th scope="col">DETAIL</th>
                                <?php } ?>
                                <th scope="col">STATUS</th>
                                <th scope="col">KOMENTAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($pengajuan == null) { ?>
                                <tr>
                                    <td colspan="6" class="text-center">Tidak Ada Data</td>
                                </tr>
                            <?php } else { ?>
                                <?php
                                $i = 1;
                                foreach ($pengajuan as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $p['nip'] ?></td>
                                        <td><?= $p['nama'] ?></td>
                                        <?php if ($session['level'] == 'Pimpinan') { ?>
                                            <td>Nomor Surat</td>
                                        <?php } else { ?>
                                            <td>
                                                <a href="<?= base_url('Pengajuan/detail_pengajuan/' . $p['id_pengajuan']) ?>" class="btn btn-primary"><i class="fas fa-file-alt"></i> Lihat Dokumen</a>
                                            </td>
                                        <?php } ?>
                                        <td><?= $p['status'] ?></td>
                                        <td><?= $p['komentar'] ?></td>
                                    </tr>
                                <?php
                                    $i++;
                                endforeach;
                                ?>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
    </main>
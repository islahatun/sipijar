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
                                <?php if ($session['level'] == 'Operator') { ?>
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
                                        <?php if ($session['level'] == 'Operator') { ?>
                                            <td>Nomor Surat</td>
                                            <td><?= $p['status'] ?></td>
                                            <td><?= $p['komentar'] ?></td>
                                        <?php } else { ?>
                                            <td>
                                                <a target="blank" href="<?= base_url('Pengajuan/cetak/') . $p['id_pengajuan'] ?>" <?= $p['id_pengajuan'] ?>>Cetak</a>
                                            </td>
                                            <td><?= $p['status'] ?></td>
                                            <td>
                                                <?php if ($p['komentar'] == 'Acc') { ?>
                                                    <div>
                                                        <button class="btn btn-success" disabled><i class="fas fa-check"></i></button>
                                                    </div>
                                                <?php } else { ?>
                                                    <form action="<?= base_url('Pengajuan/accPimpinan/' . $p['id_pengajuan']) ?>" method="post">
                                                        <input type="text" value="<?= $p['id_pengajuan'] ?>" hidden>
                                                        <input type="text" value="Acc" name="komentar" hidden>
                                                        <input type="text" value="Acc" name="status" hidden>
                                                        <button class="btn btn-primary">Acc</button>
                                                    </form>
                                                <?php } ?>
                                            </td>

                                        <?php } ?>

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

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
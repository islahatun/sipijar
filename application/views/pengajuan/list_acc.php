<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="card text-dark bg-light mb-3 mt-3">
                <div class="card-header">Daftar Pengajuan Acc</div>
                <div class="row">

                    <div class="col-4 mt-3 ml-3">
                        <?= $this->session->flashdata('message') ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="<?= base_url('Pengajuan/pdf') ?>" target="blank" class="btn btn-primary"><i class="fas fa-print"></i> Print Laporan</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">NO</th>
                                <th scope="col">NIP</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($pengajuan as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $p['nip'] ?></td>
                                    <td><?= $p['nama'] ?></td>
                                    <td class="text-center">
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
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
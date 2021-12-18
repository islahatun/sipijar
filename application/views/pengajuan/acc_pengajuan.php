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
                                <th scope="col">STATUS</th>
                                <th scope="col">KOMENTAR</th>
                                <?php if ($session['level'] == 'Operator') { ?>
                                    <th scope="col">NOMOR SURAT</th>
                                <?php } else { ?>
                                    <th scope="col">DETAIL</th>
                                <?php } ?>
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
                                            <td><?= $p['status'] ?></td>
                                            <td><?= $p['komentar'] ?></td>
                                            <?php if ($p['no_surat'] == null) { ?>
                                                <td>
                                                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" <?= $p['nip'] ?>><i class="far fa-file-alt"></i> Inpu Nomor Surat</a>
                                                </td>
                                            <?php } else { ?>
                                                <td>
                                                    <?= $p['no_surat'] ?>
                                                </td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td>
                                                <a target="blank" class="btn btn-success" href="<?= base_url('Pengajuan/cetak/') . $p['id_pengajuan'] ?>" <?= $p['id_pengajuan'] ?>>Cetak</a>
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

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button> -->
    <?php
    foreach ($pengajuan as $p) : ?>
        ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" <?= $p['nip'] ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('pengajuan/no_surat') ?>" method="post">
                            <div class="form-group row">
                                <label for="inputinput" class="col-sm-3 col-form-label">Nomor Surat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputinput" name="no_surat">
                                    <input type="hidden" class="form-control" id="inputinput" name="id_pengajuan" value="<?= $p['id_pengajuan'] ?>">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
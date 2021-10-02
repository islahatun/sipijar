<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 ">
            <div class="row mt-3">
                <div class="col">
                    <a href="" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#tambahdata"><i class="fa fa-plus"></i> TAMBAH</a>
                </div>
            </div>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr class="bg-primary text-center">
                        <th scope="col">NO</th>
                        <th scope="col">NIP</th>
                        <th scope="col">NO KARPEG</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">UNIT KERJA</th>
                        <th scope="col">GOLONGAN</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $l) : ?>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td><?= $l['nip'] ?></td>
                            <td><?= $l['no_karpeg'] ?></td>
                            <td><?= $l['nama'] ?></td>
                            <td><?= $l['unit_kerja'] ?></td>
                            <td><?= $l['gol'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('Operator/list/' . $l['id_pns']) ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahdata" <?= $l['id_pns'] ?>><i class="far fa-edit"></i> UBAH</a>
                                <a href="<?= base_url('Operator/delete/' . $l['id_pns']) ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i> HAPUS</a>
                            </td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </main>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahdataLabel">TAMBAH DATA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Operator/update') ?>" method="post">
                        <div class="row  ">
                            <div class="col-4 mt-2">
                                <label for="inputtext" class="col-form-label">NIP</label>
                            </div>
                            <div class="col">
                                <input type="text" id="inputtext" class="form-control" name="nip" required minlength="16" maxlength="16">
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-4 mt-2">
                                <label for="inputtext" class="col-form-label">NO KARPEG</label>
                            </div>
                            <div class="col">
                                <input type="text" id="inputtext" class="form-control" name="no_karpeg" required>
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-4 mt-2">
                                <label for="inputtext" class="col-form-label">NAMA LENGKAP</label>
                            </div>
                            <div class="col">
                                <input type="text" id="inputtext" class="form-control" name="nama" required>
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-4 mt-2">
                                <label for="inputtext" class="col-form-label"> UNIT KERJA</label>
                            </div>
                            <div class="col">
                                <input type="text" id="inputtext" class="form-control" name="unit_kerja" required>
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-4 mt-2">
                                <label for="inputtext" class="col-form-label"> GOLONGAN</label>
                            </div>
                            <div class="col">
                                <input type="text" id="inputtext" class="form-control" name="gol" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">TAMBAH DATA</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahdata">
        Launch demo modal
    </button> -->
    <? foreach ($list as $l) : ?>
        <!-- Modal -->
        <div class="modal fade" id="ubahdata" <?= $l['id_pns'] ?> tabindex="-1" aria-labelledby="ubahdataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ubahdataLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('Operator/update') ?>" method="post">
                            <div class="row  ">
                                <div class="col">
                                    <input type="text" id="inputtext" class="form-control" name="id_pns" required minlength="16" maxlength="16" value="<?= $l['id_pns'] ?>">
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label">NIP</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputtext" class="form-control" name="nip" required minlength="16" maxlength="16" value="<?= $l['nip'] ?>">
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label">NO KARPEG</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputtext" class="form-control" name="no_karpeg" value=" <?= $l['no_karpeg'] ?>" required>
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label">NAMA LENGKAP</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputtext" class="form-control" name="nama" value=" <?= $l['nama'] ?>" required>
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label"> UNIT KERJA</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputtext" class="form-control" name="unit_kerja" value=" <?= $l['unit_kerja'] ?>" required>
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label"> GOLONGAN</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputtext" class="form-control" name="gol" value=" <?= $l['gol'] ?>" required>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">UBAH DATA</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <? endforeach; ?>
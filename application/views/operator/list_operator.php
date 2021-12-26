<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 ">

            <div class="row mt-3">

                <div class="col mt-3">
                    <a href="" class="btn btn-primary fw-bold mb-2" data-toggle="modal" data-target="#tambahdata"><i class="fa fa-plus"></i> TAMBAH</a>
                </div>
            </div>
            <table id="table" class="table table-bordered mt-3 table-responsive-sm ">
                <thead>
                    <tr class="bg-primary text-center">
                        <th scope="col">NO</th>
                        <th scope="col">NIP</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">UNIT KERJA</th>
                        <th scope="col">GOLONGAN</th>
                        <th scope="col">LEVEL</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($list as $l) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $i; ?></th>
                            <td><?= $l['nip'] ?></td>
                            <td><?= $l['nama'] ?></td>
                            <td><?= $l['unit_kerja'] ?></td>
                            <td><?= $l['gol'] ?></td>
                            <td><?= $l['level'] ?></td>
                            <td class="text-center">
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ubahdata<?= $l['id_pns'] ?>"><i class="far fa-edit"></i> UBAH</a>
                                <a href="<?= base_url('Operator/delete/' . $l['id_pns']) ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i> HAPUS</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>


    <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="komentarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="komentarLabel">Data PNS</h5>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Operator/insert') ?>" method="post">
                        <div class="row  ">
                            <div class="col-4 mt-2">
                                <label for="inputtext" class="col-form-label">NIP</label>
                            </div>
                            <div class="col">
                                <input type="text" id="inputtext" class="form-control" name="nip" required minlength="18" maxlength="18">
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
                                <select name="unit_kerja" class="form-control">
                                    <option></option>
                                    <?php
                                    $gol = $this->db->get('m_unit_kerja')->result_array();
                                    foreach ($gol as $u) :
                                    ?>
                                        <option><?= $u['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-4 mt-2">
                                <label for="inputtext" class="col-form-label"> GOLONGAN</label>
                            </div>
                            <div class="col">
                                <select name="gol" class="form-control">
                                    <option></option>
                                    <?php
                                    $gol = $this->db->get('m_golongan')->result_array();
                                    foreach ($gol as $g) :
                                    ?>
                                        <option><?= $g['golongan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-4 mt-2">
                                <label for="inputtext" class="col-form-label">LEVEL</label>
                            </div>
                            <div class="col">
                                <select name="level" class="form-control" id="inputPassword">
                                    <option></option>
                                    <?php
                                    $level = $this->db->get('m_level')->result_array();
                                    foreach ($level as $l) :
                                    ?>
                                        <option><?= $l['level'] ?></option>
                                    <?php endforeach; ?>
                                </select>
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
    <?php
    foreach ($list as $l) : ?>
        <!-- Modal -->

        <div class="modal fade" id="ubahdata<?= $l['id_pns'] ?>" tabindex="-1" aria-labelledby="komentarLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="komentarLabel">Data PNS</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('Operator/update') ?>" method="post">
                            <div class="row  ">
                                <input hidden type="text" id="inputtext" class="form-control" name="id_pns" required minlength="18" maxlength="18" value="<?= $l['id_pns'] ?>">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label">NIP</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputtext" class="form-control" name="nip" required minlength="18" maxlength="18" value="<?= $l['nip'] ?>">
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label">NAMA LENGKAP</label>
                                </div>
                                <div class="col">
                                    <input type="text" id="inputtext" class="form-control" name="nama" required value="<?= $l['nama'] ?>">
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label"> UNIT KERJA</label>
                                </div>
                                <div class="col">
                                    <select name="unit_kerja" class="form-control">
                                        <option><?= $l['unit_kerja'] ?></option>
                                        <?php
                                        $gol = $this->db->get('m_unit_kerja')->result_array();
                                        foreach ($gol as $g) :
                                        ?>
                                            <option><?= $g['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label"> GOLONGAN</label>
                                </div>
                                <div class="col">
                                    <select name="gol" class="form-control">
                                        <option><?= $l['gol'] ?></option>
                                        <?php
                                        $gol = $this->db->get('m_golongan')->result_array();
                                        foreach ($gol as $g) :
                                        ?>
                                            <option><?= $g['golongan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row  ">
                                <div class="col-4 mt-2">
                                    <label for="inputtext" class="col-form-label">LEVEL</label>
                                </div>
                                <div class="col">
                                    <select name="level" class="form-control" id="inputPassword">
                                        <option><?= $l['level'] ?></option>
                                        <?php
                                        $level = $this->db->get('m_level')->result_array();
                                        foreach ($level as $l) :
                                        ?>
                                            <option><?= $l['level'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
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
    <?php endforeach; ?>
<div id="layoutSidenav_content">
    <div class="container-fluid mt-3">
        <?= $this->session->flashdata('message') ?>
        <div class="card">
            <div class="card-header">
                Data Pengajuan Izin Belajar
            </div>
            <div class="card-body">

                <?php echo form_open_multipart('User/insert_pengajuan'); ?>
                <div class="mb-3 row">
                    <input type="text" class="form-control form-control-sm" id="staticEmail" name="nip" value="<?= $session['nip'] ?>" hidden>
                    <label for="staticEmail" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control form-control-sm" id="staticEmail" name="nip" value="<?= $session['nip'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control form-control-sm" id="staticEmail" value="<?= $session['nama'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">SK PNS</label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" type="file" id="formFile" name="sk_pns" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">SK Rekomendasi</label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" type="file" id="formFile" name="sk_rekom" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">SK PTN</label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" type="file" id="formFile" name="sk_ptn" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Jadwal Kuliah</label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" type="file" id="formFile" name="jadwal_kuliah" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Sk Akreditasi</label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" type="file" id="formFile" name="sk_akreditasi" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nomor SK Rekomendasi</label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" type="text" id="formFile" name="no_sk" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Jenjang Pendidikan</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-sm" id="inputPassword" name="jenjang_pendidikan" required>
                            <option></option>
                            <?php
                            $pendidikan = $this->db->get('m_pendidikan')->result_array();

                            foreach ($pendidikan as $p) :
                            ?>
                                <option><?= $p['pendidikan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Sekolah / Universitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm " id="staticEmail" name="instansi_pendidikan" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Program Kuliah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="staticEmail" name="program_kuliah" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="staticEmail" name="status" value="Proses Pengajuan" hidden>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="staticEmail" name="tgl_pengajuan" value="<?= date('Y/m/d') ?>" hidden>
                    </div>
                </div>
                <?PHP if ($pengajuan['status'] == "Acc") { ?>
                    <div class="text-end">
                        <button class="btn btn-primary" type="submit">Pengajuan</button>
                    </div>
                <?php } else { ?>
                    <div class="text-end">
                        <button class="btn btn-primary" type="submit" disabled>Pengajuan</button>
                    </div>
                <?php } ?>
                </form>

            </div>
        </div>


    </div>
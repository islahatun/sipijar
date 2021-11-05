<div id="layoutSidenav_content">
    <div class="container-fluid mt-3">
        <?= $this->session->flashdata('message') ?>
        <?php echo form_open_multipart('User/edit_pengajuan/' . $pengajuan['id_pengajuan']); ?>
        <div class="mb-3 row">
            <input type="text" class="form-control" id="staticEmail" name="nip" value="<?= $session['nip'] ?>" hidden>
            <label for="staticEmail" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="staticEmail" name="nip" value="<?= $session['nip'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="staticEmail" value="<?= $session['nama'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">SK PNS</label>
            <div class="col-sm-5">
                <input class="form-control" type="file" id="formFile" name="sk_pns" value="<?= $pengajuan['sk_pns'] ?>">
            </div>
            <div class="col-sm-4">
                <label for=""><?= $pengajuan['sk_pns'] ?></label>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">SK Rekomendasi</label>
            <div class="col-sm-5">
                <input class="form-control" type="file" id="formFile" name="sk_rekom">
            </div>
            <div class="col-sm-4">
                <label for=""><?= $pengajuan['sk_rekom'] ?></label>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">SK PTN</label>
            <div class="col-sm-5">
                <input class="form-control" type="file" id="formFile" name="sk_ptn">
            </div>
            <div class="col-sm-4">
                <label for=""><?= $pengajuan['sk_ptn'] ?></label>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Jadwal Kuliah</label>
            <div class="col-sm-5">
                <input class="form-control" type="file" id="formFile" name="jadwal_kuliah">
            </div>
            <div class="col-sm-4">
                <label for=""><?= $pengajuan['sk_ptn'] ?></label>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Sk Akreditasi</label>
            <div class="col-sm-5">
                <input class="form-control" type="file" id="formFile" name="sk_akreditasi" value="<?= $pengajuan['sk_akreditasi'] ?>">
            </div>
            <div class="col-sm-4">
                <label for=""><?= $pengajuan['sk_akreditasi'] ?></label>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Jenjang Pendidikan</label>
            <div class="col-sm-10">
                <select class="form-control" id="inputPassword" name="jenjang_pendidikan">
                    <option><?= $pengajuan['jenjang_pendidikan'] ?></option>
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
                <input type="text" class="form-control" id="staticEmail" name="instansi_pendidikan" value="<?= $pengajuan['instansi_pendidikan'] ?>">
            </div>
        </div>
        <div class=" mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Program Kuliah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="program_kuliah" value="<?= $pengajuan['program_kuliah'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="status" value="Proses Pengajuan" hidden>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="tgl_pengajuan" value="<?= date('Y/m/d') ?>" hidden>
            </div>
        </div>
        <div class="text-end">
            <button class="btn btn-primary" type="submit">Pengajuan</button>
        </div>
        </form>
    </div>
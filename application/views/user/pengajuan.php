<div id="layoutSidenav_content">
    <div class="container-fluid mt-3">

        <?= $this->session->flashdata('message') ?>
        <?php echo form_open_multipart('User/insert_pengajuan'); ?>
        <div class="mb-3 row">
            <input type="text" class="form-control" id="staticEmail" name="nip" value="<?= $session['nip'] ?>">
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
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="sk_pns">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">SK Rekomendasi</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="sk_rekom">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">SK PTN</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="sk_ptn">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Jadwal Kuliah</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="jadwal_kuliah">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Sk Akreditasi</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="sk_akreditasi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Program Kuliah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="program_kuliah">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="status" value="Proses Pengajuan" hidden>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="tgl_pengajuan" value="<?= date('Y/m/d') ?>">
            </div>
        </div>
        <div class="text-end">
            <button class="btn btn-primary" type="submit">Pengajuan</button>
        </div>
        </form>
    </div>
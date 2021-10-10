<div id="layoutSidenav_content">

    <div class="container-fluid mt-3">
        <?php echo form_open_multipart('User/update'); ?>
        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="text" name="nip" value="<?= $session['nip'] ?>" readonly />
                    <label for="inputEmail">Nomor Induk Pegawai</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="text" name="nama" value="<?= $session['nama'] ?>" required />
                    <label for=" inputEmail">Nama Lengkap</label>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputFirstName" type="text" name="gelar_depan" value="<?= $session['gelar_depan'] ?>" required />
                            <label for="inputFirstName">Gelar Awal</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="text" name="gelar_belakang" value="<?= $session['gelar_belakang'] ?>" required />
                            <label for="inputLastName">Gelar Akhir</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputFirstName" type="text" name="temp_lahir" value="<?= $session['tmpt_lahir'] ?>" required />
                            <label for="inputFirstName">Tempat Lahir</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="date" name="tgl_lahir" value="<?= $session['tgl_lahir'] ?>" />
                            <label for="inputLastName">Tanggal Lahir</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <select class="form-control" id="inputPassword" name="jk">
                                <option value=""><?= $session['jk'] ?></option>
                                <option value=""></option>
                                <option value="">LAKI-LAKI</option>
                                <option value="">PEREMPUAN</option>
                            </select>
                            <label for="inputFirstName">Jenis Kelamin</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-control" id="inputPassword" name="agama">
                                <option value=""><?= $session['agama'] ?></option>
                                <option value="">Islam</option>
                                <option value="">Keristen</option>
                            </select>
                            <label for="inputLastName">Agama</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="text" name="email" value="<?= $session['email'] ?>" />
                    <label for="inputEmail">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="text" name="alamat" value="<?= $session['alamat'] ?>" />
                    <label for="inputEmail">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="text" name="pemenpatan_kerja" value="<?= $session['penempatan_kerja'] ?>" />
                    <label for="inputEmail">Penempatan Kerja</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="text" name="unit_kerja" value="<?= $session['unit_kerja'] ?>" />
                    <label for="inputEmail">Unit Kerja</label>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputFirstName" type="text" name="no_sk_pns" value="<?= $session['no_sk_pns'] ?>" />
                            <label for="inputFirstName">SK PNS</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="text" name="pangkat" value="<?= $session['pangkat'] ?>" required />
                            <label for="inputLastName">Pangkat</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <select class="form-control" id="inputPassword" name="gol">
                                <option value=""><?= $session['gol'] ?></option>
                                <?php
                                $gol = $this->db->get('m_golongan')->result_array();
                                foreach ($gol as $g) :
                                ?>
                                    <option value=""><?= $g['golongan'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="inputFirstName">Golongan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="text" name="jabatan" value="<?= $session['jabatan'] ?>" required />
                            <label for="inputLastName">Jabatan</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-control" id="inputPassword" name="pendidikan">
                                <option value=""><?= $session['pendidikan'] ?></option>
                                <?php
                                $pendidikan = $this->db->get('m_pendidikan')->result_array();

                                foreach ($pendidikan as $p) :
                                ?>
                                    <option value=""><?= $p['pendidikan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="inputLastName">Pendidikan Terakhir</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputFirstName" type="text" name="jurusan" value="<?= $session['jurusan'] ?>" required />
                            <label for="inputFirstName">Jurusan</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputFirstName" type="text" name="sandi1" required />
                            <label for="inputFirstName">Sandi</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="text" name="sandi" required />
                            <label for="inputLastName">Sandi Baru</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="<?= base_url('assets/assets/img/default.png') ?>" class="img-thumbnail" alt="..." width="200" height="200">
                    </div>
                    <div class="col">
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-control" id="inputPassword" name="status_kawin">
                                    <option value=""><?= $session['status_kawin'] ?></option>
                                    <option value="">MENIKAH</option>
                                    <option value="">BELUM NENIKAH</option>
                                    <option value="">JANDA</option>
                                    <option value="">DUDA</option>
                                </select>
                                <label for="inputLastName">Status Nikah</label>
                            </div>
                        </div>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="formFile" name="profil" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-0 text-end">

                <button class="btn btn-primary" type="submit">Ubah Data Pengguna </button>

            </div>
        </div>

        </form>

    </div>
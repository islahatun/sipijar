<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 ">
            <div class="row mt-3">
                <div class="col">
                    <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> TAMBAH</a>
                </div>
            </div>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr class="bg-primary text-center">
                        <th scope="col">NO</th>
                        <th scope="col">NO KARPEG</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">STATUS KEPEGAWAIAN</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td class="text-center">
                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i> UBAH</a>
                            <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i> HAPUS</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </main>
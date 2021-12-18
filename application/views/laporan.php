<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laporan Pengajuan Surat Izin Belajar</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center mt-5">Laporan Pengajuan Surat Izin Belajar</h1> <br>
        <table class="table table-bordered">
            <tr class="text-center">
                <th>NO</th>
                <th>NIP</th>
                <th>NAMA</th>
                <th>TANGAL PENGAJUAN</th>
                <th>NO SURAT</th>
            </tr>
            <tr>
                <?php
                $i = 1;
                foreach ($laporan as $l) :
                ?>
                    <td><?= $i; ?></td>
                    <td><?= $l['nip']; ?></td>
                    <td><?= $l['nama']; ?></td>
                    <td><?= $l['tgl_pengajuan']; ?></td>
                    <td><?= $l['no_surat']; ?></td>
            </tr>
        <?php
                    $i++;
                endforeach;
        ?>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengajuan Surat Izin Belajar</title>
</head>

<body>


</body>
<script>
    window.print();
</script>

</html>
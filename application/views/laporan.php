<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Laporan Pengajuan Surat Izin Belajar</h1>
    </center>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pendidikan Yang diajukan</th>
            <th>Tahun Pengajuan</th>
        </tr>
        <tr>
            <?php $i = 0; ?>
            <?php foreach ($laporan as $l) : ?>
                <td><?= $i; ?></td>
                <td><?= $l['nama'] ?></td>
                <td><?= $l['jenjang_pendidikan'], ['instansi_pendidikan'], ['program_kuliah'] ?></td>
                <td><?= $l['tahun_pengajuan'] ?></td>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tr>
    </table>
</body>

</html>
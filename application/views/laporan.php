<?php
$pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Laporan Pengajuan Surat Izin');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$i = 0;
$html = '<h3>Laporan Pengajuan Surat Izin Belajar</h3>
<table cellspacing="1" bgcolor="#666666" cellpadding="2">
    <tr bgcolor="#ffffff">
        <th width="5%" align="center">No</th>
        <th width="35%" align="center">Nama Pengajuan</th>
        <th width="35%" align="center">nip</th>
        <th width="45%" align="center">Pendidikan Yang diajukan</th>
        <th width="15%" align="center">Tahun Pengajuan</th>
    </tr>';
foreach ($laporan as $row) {
    $i++;
    $html .= '<tr bgcolor="#ffffff">
        <td align="center">' . $i . '</td>
        <td>' . $row['nama'] . '</td>
        <td>' . $row['nip'] . '</td>
        <td>' . $row['jenjang_pendidikan'] . '</td>
        <td>' . $row['tgl_pengajuan'] . '</td>
    </tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Laporan Pengajuan Izin Belajar.pdf', 'I');
?>

<!-- <!DOCTYPE html>
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
    <table cellspacing="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pendidikan Yang diajukan</th>
            <th>Tahun Pengajuan</th>
        </tr>
        <tr>
            <?php $i = 0; ?>
            <?php
            $l = "SELECT * FROM t_pengajuan";
            $laporan = $this->db->query($l)->result_array();
            foreach ($laporan as $l) : ?>
                <td><?= $i; ?></td>
                <td><?= $l['nama'] ?></td>
                <td><?= $l['jenjang_pendidikan'], ['instansi_pendidikan'], ['program_kuliah'] ?></td>
                <td><?= $l['tahun_pengajuan'] ?></td>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tr>
    </table>
</body>

</html> -->
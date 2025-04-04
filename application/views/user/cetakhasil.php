<?php
$hasil = $_SESSION['hasildiagnosa'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Diangosa || Print</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/fontawesome-free/css/all.min.css") ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
</head>

<body>

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">

                <div class="container-fluid" style="font-family: 'Times New Roman'">
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row pl-3" >
                            <div class="row col-12 bordered">
                                <center style="width: 100vw;">
                                    <h2>HASIL DIAGNOSA PENYAKIT PADA TANAMAN WORTEL</h2>
                                    <h2>DAUCUS CAROTA L</h2>
                                </center>
                            </div>
                            <div style="width: 100vw;border:1px solid black;margin-left:15px;margin-right:15px;margin-bottom:30px">
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td><b><?= $hasil['nama'] ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Penyakit</td>
                                        <td>:</td>
                                        <td><b><?= $hasil['namapenyakit'] ?> </b></td>
                                    </tr>
                                </table>
                                <p style="margin-top:10px">Gejala yang dipilih</p>
                                <ol style="margin-top:-10px">
                                    <?php foreach ($hasil['gejalacentang'] as $kembali) : ?>
                                        <li>
                                            <?= $kembali->kode_gejala ?> : <?= $kembali->nama_gejala ?>
                                        </li>
                                    <?php endforeach ?>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>

                        <div class="p-2">
                            <b><i>Solusi</i></b>
                            <ul style="line-height:10px">
                                <?php
                                $solusi = $hasil['solusi'];
                                $solusiArr = explode("+", $solusi);

                                for ($i = 1; $i < count($solusiArr); $i++) {
                                    echo "<li>" . $solusiArr[$i] . "</li></br>";
                                }
                                ?>
                            </ul>
                        </div>

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="<?= base_url('cetakhasil') ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                <a href="<?= base_url('user/diagnosa') ?>" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-back"></i> Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<script>
    window.addEventListener("load", window.print());
</script>
</body>

</html>
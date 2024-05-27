<div class="content-wrapper">
    <!-- batas -->
    <?php
// var_dump($hasil);
// die;
    ?>
    <section class="content">
        <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h4>
                        <i class="fas fa-globe"></i> Hasil Diagnosa
                    </h4>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <table>
                    <tr>
                        <td>Nama </td>
                        <td>:</td>
                        <td><?=$user['fullname']?></td>
                    </tr>
                    <tr>
                        <td>Alamat </td>
                        <td>:</td>
                        <td>Butuh kirim alamat</td>
                    </tr>
                </table>


            </div>
            <!-- /.row -->

            <!-- Table row -->
            
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                    <p class="lead">Detail Hasil Diagnosa</p>

                    <table>
                        <tr>
                            <td>Nilai Probabilitas Bayes</td>
                            <td>:</td>
                            <td><?=$hasil['nilaipeluang']?> atau <?=$hasil['persenpeluang']?> %</td>
                        </tr>
                        <tr>
                            <td>Penyakit</td>
                            <td>:</td>
                            <td><?=$hasil['kodepenyakit']?> || <?=$hasil['namapenyakit']?></td>
                        </tr>
                        <tr>
                            <td>Solusi</td>
                            <td>:</td>
                            <td><?=$hasil['solusi']?></td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-12">
                    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                    <a href="<?=base_url('user/diagnosa')?>" class="btn btn-primary float-right" style="margin-right: 5px;">
                        <i class="fas fa-back"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
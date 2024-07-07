<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">

                <div class="container-fluid">
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="row col-12">
                                <img style="margin-bottom: 12px;margin-left:15px" width="100px" src="<?= base_url('assets/img/logo.png') ?>" alt="">
                                <div>
                                    <b style="font-size: 30px;margin-left:40px">RUMAH SAKIT UMUM MITRA SEJATI</b>
                                    <p style="margin-left:40px;margin"><i>Jl. Jenderal Besar A.H. Nasution No.7, Pangkalan Masyhur, Kec. Medan Johor, Kota Medan, Sumatera Utara 20219 </i></p>
                                    <p style="margin-left:40px;margin-top:-12px">Telepon: (061) 7875967</p>
                                </div>
                            </div>
                            <div style="width: 100vw;border:1px solid black;margin-left:15px;margin-right:15px;margin-bottom:30px">
                            </div>
                            <div>
                                <p>Gejala yang dipilih</p>
                                <ol>
                                    <?php foreach ($hasil['gejalacentang'] as $kembali) : ?>
                                        <li>
                                            <?= $kembali->kode_gejala ?> : <?= $kembali->nama_gejala ?>
                                        </li>
                                    <?php endforeach ?>
                                </ol>
                            </div>
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-notes-medical mr-2"></i>
                                    <span>Hasil Diagnosa</span>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="row invoice-info">
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-1">
                                        <span>Nama</span>
                                    </div>
                                    <div class="col-4"><span>: <?= $nama ?></span></div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <span>Alamat</span>
                                    </div>
                                    <div class="col-4"><span>: <?= $alamat ?></span></div>
                                </div>
                            </div>
                        </div>
                        <table class="mt-3">
                            <tr>
                                <td style="width:200px">Nilai Probabilitas Bayes</td>
                                <td style="width:15px">:</td>
                                <td><?= $hasil['nilaipeluang'] ?> atau <?= $hasil['persenpeluang'] ?> %</td>
                            </tr>
                            <tr>
                                <td style="width:200px">Penyakit</td>
                                <td style="width:15px">:</td>
                                <td><?= $hasil['kodepenyakit'] ?> || <?= $hasil['namapenyakit'] ?></td>
                            </tr>
                            <tr style="vertical-align: top">
                                <td style="width:200px">Solusi</td>
                                <td style="width:15px">:</td>
                                <td>
                                    <ul style="padding: 0 20px;">
                                        <?php
                                        $solusi = $hasil['solusi'];
                                        $solusiArr = explode("+", $solusi);

                                        for ($i = 1; $i < count($solusiArr); $i++) {
                                            echo "<li>" . $solusiArr[$i] . "</li></br>";
                                        }
                                        ?>
                                    </ul>
                                </td>
                            </tr>
                        </table>
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
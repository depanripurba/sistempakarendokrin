<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12 mt-3">

                <div class="container-fluid">
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-notes-medical mr-2"></i>
                                    <span>Hasil Diagnosa</span>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-12">
                                <div class="row mt-3">
                                    <div class="col-1">
                                        <span>Nama</span>
                                    </div>
                                    <div class="col-4"><span>: <?=$user['fullname']?></span></div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <span>Alamat</span>
                                    </div>
                                    <div class="col-4"><span>: [Alamat]</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">Nilai Probabilitas Bayes</div>
                                    <div class="col-1">:</div>
                                    <div class="col-9"><?=$hasil['nilaipeluang']?> atau <?=$hasil['persenpeluang']?> %
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">Penyakit</div>
                                    <div class="col-1">:</div>
                                    <div class="col-9"><?=$hasil['kodepenyakit']?> || <?=$hasil['namapenyakit']?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">Solusi</div>
                                    <div class="col-1">:</div>
                                    <div class="col-9"><?=$hasil['solusi']?>
                                        <?php
											$solusi = $hasil['solusi'];
											$solusiArr = explode("+",$solusi);

											print_r($solusiArr);
										?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                                        class="fas fa-print"></i> Print</a>
                                <a href="<?=base_url('user/diagnosa')?>" class="btn btn-primary float-right"
                                    style="margin-right: 5px;">
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
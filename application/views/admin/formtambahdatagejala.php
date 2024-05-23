<div class="content-wrapper">
    <!-- batas -->

    <div class="card-body">
        <!-- custom isi -->

        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data Gejala Baru</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
								// var_dump($kode_gejala->kode_gejala);
								?>
                <form method="POST" action="<?=base_url('Master/addGejala')?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kode_gejala">Kode Gejala</label>
                            <input type="text" name="kode_gejala" id="kode_gejala" class="form-control"
                                placeholder="kode_gejala">
                            <!-- <input type="hidden" name="kode_gejala" id="kode_gejala" value="G01"> -->
                        </div>
                        <div class="form-group">
                            <label for="nama_gejala">Nama Gejala</label>
                            <input name="nama_gejala" type="text" class="form-control" id="nama_gejala"
                                placeholder="Nama Gejala">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                        <a href="<?=base_url('/datagejala')?>" class="btn btn-secondary">Batal/Kembali</a>
                    </div>
                </form>
            </div>
        </div>




        <!-- custom isi -->
    </div>

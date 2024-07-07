<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <form action="<?= base_url('diagnosa/prosesdiagnosa') ?>" method="post">
                        <div class="card">
                        <div class="card-header">
                                <h3 class="card-title">Identitas</h3>
                            </div>
                            <!-- bagian identitas user -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_gejala">Nama</label>
                                    <input required type="text" name="nama" id="nama" class="form-control" placeholder="Nama...">
                                </div>
                                <div class="form-group">
                                    <label for="nama_gejala">Usia</label>
                                    <input required name="usia" type="text" class="form-control" id="nama_gejala" placeholder="Usia...">
                                </div>
                                <div class="form-group">
                                    <label for="nama_gejala">Jenis Kelamin</label>
                                    <select class="form-control" name="jeniskelamin" id="">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_gejala">Alamat</label>
                                    <input required name="alamat" type="text" class="form-control" id="nama_gejala" placeholder="Alamat...">
                                </div>
                            </div>
                            <!-- end bagian identitas user -->
                            <div class="card-header">
                                <h3 class="card-title">Diagnosa Penyakit</h3>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No.</th>
                                            <th>Gejala</th>
                                            <th style="width: 40px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($gejala as $g) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $g['nama_gejala'] ?></td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="<?= $g['kode_gejala'] ?>" value="1" name="gejala[<?= $g['kode_gejala'] ?>]">
                                                        <label for="<?= $g['kode_gejala'] ?>" class="custom-control-label"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <button class="btn btn-info">Diagnosa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- /.content-wrapper -->
<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0">Data Basis Pengetahuan</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">master</a></li>
                                        <li class="breadcrumb-item active">basispengetahuan</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Basis Pengetahuan</h3>
                            <a class="btn btn-success mx-3" href="<?= base_url('tambahbasis') ?>">Tambah Data Basis
                                Pengetahuan
                                Baru</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Penyakit</th>
                                        <th>Kode Gejala</th>
                                        <th>Nilai Probabilitas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 1.2</td>
                                        <td>OSX.3</td>
                                        <td>125.5</td>
                                        <td class="text-center">
                                            <button data-url="" id="hapusdata" class="btn btn-danger"><i data-url=""
                                                    data-toggle="tooltip" data-placement="top" title="Hapus"
                                                    class="fas fa-trash"></i></button> <a class="btn btn-info"
                                                href="<?= base_url('editpenyakit/') ?>"><i data-toggle="tooltip"
                                                    data-placement="top" title="Edit" class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<!-- /.content-wrapper -->
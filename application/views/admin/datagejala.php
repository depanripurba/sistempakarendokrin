<div class="content-wrapper">
    <!-- batas -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Gejala</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">master</a></li>
                        <li class="breadcrumb-item active">datagejala</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Gejala</h3>
                <a class="btn btn-success mx-3" href="<?= base_url('tambahdatagejala') ?>">Tambah Data Gejala Baru</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Kode Gejala</th>
                            <th>Nama Gejala</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($gejala as $item): ?>
                        <tr>
                            <td><?=$item['kode_gejala']?></td>
                            <td><?=$item['nama_gejala']?></td>
                            <td>
                                <a class="btn btn-success"
                                    href="<?=site_url('Master/ubahdatagejala/'.$item['kode_gejala'])?>">Edit</a>
                                <a class="btn btn-danger" onclick="alert('Yakin Ingin Menghapus Data ini?')"
                                    href="<?=site_url('Master/deleteGejala/'.$item['kode_gejala'])?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

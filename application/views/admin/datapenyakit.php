<div class="content-wrapper">
  <!-- batas -->

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Penyakit</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">master</a></li>
            <li class="breadcrumb-item active">datapenyakit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Pasien</h3>
        <a class="btn btn-success mx-3" href="<?= base_url('tambahdatapenyakit') ?>">Tambah Data Penyakit Baru</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Penyakit</th>
              <th>Nama Penyakit</th>
              <th>Solusi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1 ?>
            <?php foreach ($penyakit['penyakit'] as $data) : ?>
              <tr>
                <td class="text-center"><?= $nomor ?></td>
                <td><?= $data->kode_penyakit ?></td>
                <td><?= $data->nama_penyakit ?></td>
                <td><?= $data->solusi ?></td>
                <td class="text-center">
                  <button data-url="<?= base_url('hapuspenyakit/' . $data->kode_penyakit) ?>" id="hapusdata" class="btn btn-danger"><i data-url="<?= base_url('hapuspenyakit/' . $data->kode_penyakit) ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="fas fa-trash"></i></button> <a class="btn btn-info" href="<?= base_url('editpenyakit/') ?><?= $data->kode_penyakit ?>"><i data-toggle="tooltip" data-placement="top" title="Edit" class="fas fa-edit"></i></a>
                </td>
                <?php $nomor++ ?>
              <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    
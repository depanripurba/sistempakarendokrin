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
        <h3 class="card-title">Data Basis Pengetahuan</h3>
        <a class="btn btn-success mx-3" href="<?= base_url('tambahbasis') ?>">Tambah Data Basis Pengetahuan Baru</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Penyakit</th>
              <th>Nama Penyakit</th>
              <th>Kode Gejala</th>
              <th>Nama Gejala</th>
              <th>Nilai Probabilitas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1 ?>
            <?php foreach ($basis as $b) : ?>
              <tr>
                <td><?= $nomor ?></td>
                <td><?= $b->kode_penyakit ?></td>
                <td><?= $b->nama_penyakit ?></td>
                <td><?= $b->kode_gejala ?></td>
                <td><?= $b->nama_gejala ?></td>
                <td><?= $b->nilai ?></td>
                <td class="text-center">
                  <button data-url="<?= base_url('hapusbasis/' . $b->id) ?>" id="hapusdata" class="btn btn-danger">
                    <i data-url="<?= base_url('hapusbasis/' . $b->id) ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="fas fa-trash"></i>
                  </button>
                  <a class="btn btn-info" href="<?= base_url('editbasis/') . $b->id ?>"><i data-toggle="tooltip" data-placement="top" title="Edit" class="fas fa-edit"></i></a>
                </td>
              </tr>
              <?php $nomor++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
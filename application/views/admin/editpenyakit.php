<div class="content-wrapper">
  <!-- batas -->

  <div class="card-body">
        <!-- custom isi -->

        <div class="col-md-9">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Form Edit Data Penyakit Baru</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="<?=base_url('posteditpenyakit')?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kodepenyakit">Kode Penyakit</label>
                  <input value="<?=$dataedit[0]->kode_penyakit?>" disabled name="kode_penyakit" type="text" class="form-control" id="kodepenyakit" placeholder="Kode Penyakit">
                  <input type="hidden" name="kode_penyakit" value="<?=$dataedit[0]->kode_penyakit?>">
                </div>
                <div class="form-group">
                  <label for="namapenyakit">Nama Penyakit</label>
                  <input value="<?=$dataedit[0]->nama_penyakit?>" name="nama_penyakit" type="text" class="form-control" id="namapenyakit" placeholder="Nama Penyakit...">
                </div>
                 <div class="form-group">
                  <label for="solusi">Solusi</label>
                 <textarea name="solusi" id="solusi" class="form-control" cols="30" rows="5"><?=$dataedit[0]->solusi?></textarea>
                </div>
            
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success">Update Data Penyakit</button>
                <a class="btn btn-secondary" href="<?=base_url('datapenyakit')?>">Batal/Kembali</a>
              </div>
            </form>
          </div>
        </div>




        <!-- custom isi -->
      </div>
   


      
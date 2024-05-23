<?php 
$rendercode = substr($kode,1)*1;
$panjangkarakter = strlen($rendercode);
if($panjangkarakter<=1){
  $rendercode = "P0".$rendercode;
}else{
  $rendercode = "P".$rendercode;
}


 ?>

<div class="content-wrapper">
  <!-- batas -->

  <div class="card-body">
        <!-- custom isi -->

        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Data Penyakit Baru</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="<?=base_url("addpenyakit")?>">
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_penyakit">Kode Penyakit</label>
                  <input value="<?=$rendercode?>" disabled="" name="kode_penyakit" type="text" class="form-control" id="kodepenyakit" placeholder="Kode Penyakit">
                  <input type="hidden" name="kode_penyakit" value="<?=$rendercode?>">
                </div>
                <div class="form-group">
                  <label for="namagejala">Nama Penyakit</label>
                  <input name="nama_penyakit" type="text" class="form-control" id="namapenyakit" placeholder="Nama Penyakit...">
                </div>
                <div class="form-group">
                  <label for="solusi">Solusi</label>
                 <textarea name="solusi" id="solusi" class="form-control" cols="30" rows="5"></textarea>
                </div>
            
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                <a href="<?=base_url("datapenyakit")?>" class="btn btn-secondary">Batal/Kembali</a>
              </div>
            </form>
          </div>
        </div>




        <!-- custom isi -->
      </div>
   


      
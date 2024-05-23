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
            <form method="POST" action="http://localhost/sistempakaryuni/GejalaController/tambahgejala">
              <div class="card-body">
                <div class="form-group">
                  <label for="kodegejala">Kode Gejala</label>
                  <input value="G01" disabled="" name="kode_penyakit" type="text" class="form-control" id="kodegejala" placeholder="Kode Penyakit">
                  <input type="hidden" name="kode_gejala" value="G001">
                </div>
                <div class="form-group">
                  <label for="namagejala">Nama Gejala</label>
                  <input name="nama_gejala" type="text" class="form-control" id="namagejala" placeholder="Nama gejala...">
                </div>
            
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
                <a href="http://localhost/sistempakaryuni/gejala" class="btn btn-secondary">Batal/Kembali</a>
              </div>
            </form>
          </div>
        </div>




        <!-- custom isi -->
      </div>
   


      
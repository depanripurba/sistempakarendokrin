<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Diagnosa Penyakit</h3>
                        </div>
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
                                    <?php $no = 1; foreach($gejala as $g): ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$g['nama_gejala']?></td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1"
                                                    value="option1">
                                                <label for="customCheckbox1" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach ; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <button class="btn btn-info">Diagnosa</button>
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- /.content-wrapper -->
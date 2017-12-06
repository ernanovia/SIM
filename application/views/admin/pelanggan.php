   

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Data Pelanggan</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Pelanggan</h1>
            </div>
        </div><!--/.row-->    <!-- / -->

        <div class="panel panel-default">

         <!-- /.panel-body -->
        <div class="panel-body">
            <!-- / menu select -->
             <div class="row">
                <div class="col">
                <label class="col-sm-2 col-form-label">Filter Data Pelanggan </label>
                 <div class="col-sm-3">
                    <select class="selectpicker">
                        <option>Aktif</option>
                        <option>Pasif</option>
                        <option>Semua</option>
                    </select>
                </div>
                </div>
            </div> 
            <!-- /end menu select -->

            <div class="text-right"><a href="<?php echo site_url('Home/pelanggan_tambah')?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <br>
        <!-- / table -->
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
             <tr>
            <center>
                <th>No</th>
                <th>Nama</th>
                <th>Universitas</th>
                <th>Fakultas</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
                
            </center>
                </tr>

            </thead>
        <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align:center">
                <a href="#" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="<?php echo site_url('Home/pelanggan_edit')?>" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            </tr>
               
            </tbody>

        </table>
        <!-- /end table -->

    </div>

    </div>
        
    </div>  <!--/.main-->
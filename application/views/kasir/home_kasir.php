	<div class="col-md-1"></div>
	<div class="col-md-10 col-centered">
		<div class="panel panel-default" >
		 <div class="panel-body">
		 	<form class="form-horizontal" id="form_transaksi" role="form">
	      	<div class="col-md-8">
			   
	      		<div class="form-group">
			      <label class="control-label col-md-3" 
			      	for="tgl_transaksi">Tgl.Transaksi :</label>
			      <div class="col-md-5">
			        <input type="text" class="form-control" 
			        	name="tgl_transaksi" value="<?= date('d-m-Y') ?>" 
			        	readonly="readonly">
			      </div>
			    </div> 
			    <div class="form-group">
			      <label class="control-label col-md-3" 
			      	for="id_Kendaraan">Id Kendaraan :</label>
			      <div class="col-md-5">
			        <input list="list_Kendaraan" class="form-control reset" 
			        	placeholder="Isi id Kendaraan" name="id_Kendaraan" id="id_Kendaraan" 
			        	autocomplete="off">
			      </div>
			      <div class="col-md-1">
			      <button type="button" class="btn btn-primary" 
                  id="Cari" style="background-color: #30a5ff">
                     Cari</button>
		          </div>
			    </div>
			    <div id="Kendaraan">
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="nama_Kendaraan">Nama Kendaraan :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="nama_Kendaraan" id="nama_Kendaraan" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="harga_Kendaraan">Harga (Rp) :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="harga_Kendaraan" id="harga_Kendaraan" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="qty">Lama Sewa (Hari) :</label>
				      <div class="col-md-4">
				        <input type="number" class="form-control reset" 
				        	autocomplete="off" onchange="subTotal(this.value)" 
				        	onkeyup="subTotal(this.value)" id="qty" min="0" 
				        	name="qty" placeholder="lama..">
				      </div>
				    </div>
			    </div><!-- end id Kendaraan -->

			    <div class="form-group">
			      <label class="control-label col-md-3" 
			      	for="sub_total">Sub-Total (Rp):</label>
			      <div class="col-md-8">
			        <input type="text" class="form-control reset" 
			        	name="sub_total" id="sub_total" 
			        	readonly="readonly">
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="col-md-offset-3 col-md-3">
			      		<button type="button" class="btn btn-primary" 
			      		id="tambah" style="background-color: #30a5ff">
			      		   Tambah</button>
			    	</div>
			    </div>
			      
	      	</div><!-- end col-md-8 -->

		<div class="col-md-4 mb">
				<div class="col-md-12">
				  	<div class="form-group">
				      <label for="total" class="besar">Total (Rp) :</label>
				      	<input type="text" class="form-control input-lg" 
			        	name="total" id="total" placeholder="0">
				    </div>
				    <div class="form-group">
				      <label for="bayar" class="besar">Bayar (Rp) :</label>
				        <input type="text" class="form-control input-lg uang" 
				        	name="bayar" placeholder="0" autocomplete="off"
				        	id="bayar">
				    </div>
				    <div class="form-group">
				      <label for="kembali" class="besar">Kembali (Rp) :</label>
				      	<input type="text" class="form-control input-lg" 
			        	name="kembali" id="kembali" placeholder="0"
			        	readonly="readonly">
				    </div>
				</div>
	      	</div><!-- end col-md-4 -->
	      	</form>
	      	<table id="table_transaksi" class="table table-striped 
	      		table-bordered">
				<thead>
				 	<tr>
					   	<th>No</th>
					   	<th>Id Kendaraan</th>
					   	<th>Nama Kendaraan</th>
					   	<th>Harga</th>
					   	<th>Lama Sewa</th>
					   	<th>Sub-Total</th>
					   	<th>Aksi</th>
				 	</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<div class="col-md-offset-10" style="margin-top:20px">
				<button type="button" class="btn btn-primary btn-lg" 
				id="selesai" style="background-color: #30a5ff">
				Selesai </button>
			</div>
	      </div>
	    </div>
	</div><!-- end col-md-9 -->
<div class="col-md-1"></div>
	
      
   
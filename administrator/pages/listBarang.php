<div id="page-wrapper">
            <div class="container-fluid" id="konten">
                <div class="row" >
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Barang</h1>
                    </div>
<div id="tombolatas">
	<div class="row">
		<div class="col-lg-12">
			<div class="search">
			 	<form class="navbar-form navbar-left" role="search">
        			<div class="form-group">
        				<input type="text" class="form-control" placeholder="Search">
        			</div>
        			<button type="submit" class="btn btn-default">Submit</button>
    			</form>
    		</div>
			<div class="text-right">
				<p>
		  				<a href="#" class="btn btn-default"><i class="fa fa-files-o"></i> Export Data</a>
		  				<a href="tambah_barang.php" id="tambahbarang" class="btn btn-default"><i class="fa fa-user-plus"></i> Tambah Barang</a>
				</p>
			</div>
		</div>
	</div>
</div>
<table class="table table-bordered">
	<thead>
		<tr>
		    			<th>Kode Barang</th>
		    			<th>Nama Barang</th>
		    			<th>Stock</th>
		    			<th>Satuan</th>
		    			<th>Harga Beli</th>
		    			<th>Harga Jual</th>
		    			<th>Kode Kategori</th>
		    			<th>Aksi</th>	
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td>B001</td>
		    			<td>Aqua</td>
		    			<td>2</td>
		    			<td>Dus</td>
		    			<td></td>
		    			<td></td>
		    			<td>2</td>
		    			<td>
		  			<a href="edit_barang.php" id="edit"> Edit </a>|
		  			<a href="hapus_barang.php"> Hapus </a>
		  		</td>
		    		</tr>
		    		<tr>
		    			<td>B002</td>
		    			<td>Indomilk Banana</td>
		    			<td>2</td>
		    			<td>Dus</td>
		    			<td></td>
		    			<td></td>
		    			<td>2</td>
		    			<td>
		  			<a href="#"> Edit </a>|
		  			<a href="#"> Hapus </a>
		  		</td>
		    		</tr>
		    	</tbody>
		    </table>
	<script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/sb-admin-2.js"></script>
   <script>
        $(document).ready(function(){
            $('#tambahbarang').click(function(){
                $('#konten').load('tambah_barang.html');
            });
        });
        </script>
        <script>
        $(document).ready(function(){
            $('#edit').click(function(){
                $('#konten').load('ubah_detail.html');
            });
        });
        </script>
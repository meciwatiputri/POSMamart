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
		    			<th>Harga Jual/piece</th>
		    			<th>Kode Kategori</th>
		    			<th>Aksi</th>	
		    		</tr>
		    	</thead>
		    	<tbody>
		    	<?php foreach ($data_brg as $dtbrg){?>
		    		<tr>
		    			<td><?= $dtbrg['Id_Barang']?></td>
		    			<td><?= $dtbrg['Nama_Barang']?></td>
		    			<td><?= $dtbrg['Stock']?></td>
		    			<td><?= $dtbrg['Satuan']?></td>
		    			<td><?= $dtbrg['Harga_Beli']?></td>
		    			<td><?= $dtbrg['Harga_Jual']?></td>
		    			<td><?= $dtbrg['Id_kategori']?></td>
		    			<td>
		  			<a href="edit_barang.php" id="edit"> Edit </a>|
		  			<a href="hapus_barang.php"> Hapus </a>
		  		</td>
		    		</tr>
		    	<?php  }?>
		    	</tbody>
		    </table>
        </script>
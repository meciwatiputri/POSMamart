<div id="page-wrapper">
    <div class="row">
	   	<div class="col-lg-12">
			<h1 class="page-header">Data Pengguna</h1>
		</div>
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
		  			<a href="tambah_user.php" id="tambahuser" class="btn btn-default"><i class="fa fa-user-plus"></i> Tambah Pengguna</a>
			</p>
			</div>
			</div>
		</div>
	</div>
	<table class="table table-bordered">
		<thead>
		   	<tr>
		    	<th>Nama</th>
		    	<th>Status</th>
		    	<th>Aksi</th>
		    </tr>
		</thead>
		<tbody>
		<?php foreach ($data_user as $dtu)
		{?>
		<tr>
		    <td><?= $dtu['Nama']?></td>
		    <td><?= $dtu['Id_Posisi']?></td>
		    <td><a href="lengkap_user.php" id="detail1">Detail </a>|<a href="#">Hapus</a></td>
		</tr>
		<?php } ?>
		    	</tbody>
		    </table>
	</div>
</div>
        </div>
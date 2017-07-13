<div id="page-wrapper">
            <div class="container-fluid" id="konten">
                <div class="row" >
                    <div class="col-lg-12">
                        <h1 class="page-header">Tambah Barang</h1>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-12"><form class="form-horizontal" role="form">
                            <form role="form" action="aksi_tambah_barang.php" method="POST">
                                <div class="form-group">
                                    <label for="namabarang" class="col-sm-2 control-label">Nama Barang :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namabarang" placeholder="Nama Barang"                >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Stock" class="col-sm-2 control-label">Stock :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="stock" placeholder="Stock">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="satuan" class="col-sm-2 control-label">Satuan :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="satuan" placeholder="Dus, Lusin, Pack">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hargabeli" class="col-sm-2 control-label">Harga Beli :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="hargabeli" placeholder="Harga Beli">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select name="kategori" id="kategori" class="form-control">
                                            <?php foreach ($daftar_kategori as $dk): ?>
                                            <option value="<?php echo $dk['Id_kategori'] ?>"><?php echo $dk['Kategori_barang'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="col-sm-offset-1 btn btn-default">Simpan</button>
                                </div>
                             </form> 
                        </div>
                    </div>
            </div>
</div>
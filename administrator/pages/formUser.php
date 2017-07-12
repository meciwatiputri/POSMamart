<div id="page-wrapper">
            <div class="container-fluid" id="konten">
                <div class="row" >
<div class="col-lg-12">
				<h1 class="page-header">Tambah Pengguna</h1>
			</div>
    <div class="row">
        <div class="col-sm-12"><form class="form-horizontal" role="form">
            <form role="form" action="aksi_tambah_user.php" method="POST">
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNik" class="col-sm-2 control-label">NIK :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNik" placeholder="NIM">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputkodeuser" class="col-sm-2 control-label">Kode User :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputkodeadmin" placeholder="Kode User">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputJenisKelamin" class="col-sm-2 control-label">Jenis Kelamin :</label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="pria">Pria
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="wanita"> Wanita
                    </label>
                </div>
                <div class="form-group">
                    <label for="inputAlamat" class="col-sm-2 control-label">Alamat :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTelp" class="col-sm-2 control-label">No.Telp :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTelp" placeholder="Nomor Telepon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputKodeAdmin" class="col-sm-2 control-label">Kode Admin :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputKodeAdmin" placeholder="Kode Admin">
                    </div>
                </div>
                <div class="form-group">
                            <label for="sandi" class="col-sm-2 control-label">Password :</label>
                          <div class="col-sm-10">
                              <input type="password" class="form-control" id="sandi">
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="konfirmasisandi" class="col-sm-2 control-label">Konfirmasi<br>Password :</label>
                          <div class="col-sm-10">
                                <input type="password" class="form-control" id="konfirmasisandi">
                            </div>
                        </div>
                <div class="form-group">
                    <label for="exampleInputFile" class="col-sm-2 control-label">Foto Profil</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block"></p>
                </div>
                <div class="form-group">
                    <button type="submit" class="col-sm-offset-1 btn btn-default">Simpan</button>
                </div>
            </form> 
         </div>
    </div>
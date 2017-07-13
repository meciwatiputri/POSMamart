<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
                        <h1 class="page-header">Detail</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="col-sm-3"><img src="template/img/SITO AZMI NURCHOLIS.jpg" class="img-thumbnail img-responsive"><br>
                            <a href="#" id="ubahprofil"><i class="fa fa-user fa-fw"></i> Edit User</a><br>
                        </div>
                    <table class="beranda col-sm-offset-3" >

                        <tr>
                            <td>Nama : </td>
                            <?php foreach ($data_user as $dtu){?>
                            <td><?= $dtu['Nama']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Nik : </td>
                            <?php foreach ($data_user as $dtu){?>
                            <td><?= $dtu['Nik']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Kode User : </td>
                            <?php foreach ($data_user as $dtu){?>
                            <td><?= $dtu['Id_User']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin : </td>
                            <?php foreach ($data_user as $dtu){?>
                            <td><?= $dtu['Jenis_Kelamin']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Alamat : </td>
                            <?php foreach ($data_user as $dtu){?>
                            <td><?= $dtu['Alamat']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>No.telp : </td>
                            <?php foreach ($data_user as $dtu){?>
                            <td><?= $dtu['No_telp']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Kode Admin: </td>
                            <?php foreach ($data_user as $dtu){?>
                            <td><?= $dtu['Id_Admin']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <?php foreach ($data_user as $dtu){?>
                            <td><?= $dtu['Password']?></td>
                            <?php } ?>
                        </tr>
                    </table>
                    </div>
                </div>
            </div> 
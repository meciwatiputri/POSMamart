<div id="page-wrapper">
            <div class="container-fluid" id="konten">
                <div class="row" >
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                    <table class="beranda" >
                        <tr>
                            <td>Nama : </td>
                            <?php foreach ($data_admin as $dta){?>
                            <td><?= $dta['Nama']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Nik : </td>
                            <?php foreach ($data_admin as $dta){?>
                            <td><?= $dta['Nik']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Kode Admin : </td>
                            <?php foreach ($data_admin as $dta){?>
                            <td><?= $dta['Id_Admin']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin : </td>
                            <?php foreach ($data_admin as $dta){?>
                            <td><?= $dta['Jenis_kelamin']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Alamat : </td>
                            <?php foreach ($data_admin as $dta){?>
                            <td><?= $dta['Alamat']?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>No.telp : </td>
                            <?php foreach ($data_admin as $dta){?>
                            <td><?= $dta['No_telp']?></td>
                            <?php } ?>
                        </tr>
        <?php } ?>
                    </table>
                    </div>
                </div>
              
            </div>
           
        </div>
       

    </div>
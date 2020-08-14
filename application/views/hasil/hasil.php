<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>NIK</td>
                        <td>Nama</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>No. Telepon</td>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    if ($c_regis>0)
                    {
                        foreach ($regis as $datas)
                    {
                ?>
                    <tr>
                        <td><?php echo $datas->nik;?></td>
                        <td><?php echo $datas->nama;?></td>
                        <td><?php echo $datas->username;?></td>
                        <td><?php echo $datas->password;?></td>
                        <td><?php echo $datas->tlp ?></td>
                        <td><img src="<?php echo base_url('assets/'.$datas->image) ?>" alt=""></td>
                        <td>
                            <div class="col-12">
                                <button class="btn btn-success btn-sm edit_data" style="width: 100%;"></button>
                            </div>
                            <div class="col-12 mt-2">
                                <button id="" class="btn btn-danger btn-sm hapus_data" style="width: 100%;"></button>
                            </div>
                        </td>
                    </tr>
                        <?php }
                        }
                        else {
                        ?>
                        <tr>
                        <td colspan="8"><center>Data user kosong!</center></td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
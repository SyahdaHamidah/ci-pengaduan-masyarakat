<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #img{
            width: 2%;
            height: 2%;
            margin-top: 10px;
            margin-left: 10px;
        }
        #card{
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            width: 329px;
            height: 410px;
            margin-top: 7%;
            margin-left: 10%;
        }
        #card-content {
            padding: 12px 44px;
        }
        #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
        }
        .garis_verikal{
            border-left: 1px black solid;
            height: 450px;
            width: 0px;
            margin-left: 50%;
            margin-top: -32%; 
        }
        #img2{
            width: 40%;
            height: 50%;
            margin-left: 55%;
            margin-top: -37%;
        }
    </style>
</head>
<body>
    <div>
        <a href="<?php echo site_url('Home/index');?>">
            <img src="<?php echo base_url('assets/back.png')?>" alt="" id="img">
        </a>
            
        <div id="card">
            <div id="card-content">
                    <div id="card-title">
                        <h2>Login</h2>
                    <div class="underline-title"></div>
                    </div>
                </div>
            <form action="<?php echo site_url('sistem/aksi_login')?>" method="post"> 
            <div class="form-group" style="width: 78%; margin-left: 10%;">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group" style="width: 78%; margin-left: 10%;">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-info" style="margin-left: 70%;">Submit</button>
            </form>
        </div>

        <div class="garis_verikal"></div>

        <img src="<?php echo base_url('assets/img.jpg')?>" alt="" id="img2">
    </div>
</body>
</html>
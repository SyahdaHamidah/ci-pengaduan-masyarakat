<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Pengaduan Masyarakat</title>
    <style>
        body{
            background-image: url('assets/hd.jpg');
            overflow: hidden;
            margin-top: 0px;
            background-size: 100%;
            height: 1350px;
        }
        h1{
            margin-top: 20px;
            margin-left: 20px;
        }
        .menu{
            margin-top: -3%;
        }
        div.menu ul {
            list-style: none;
            overflow: hidden;
        }
        div.menu ul li {
            float: right;
            margin-right: 2%;		
        }
        div.menu ul li a {
            padding:0 10px;
            color:#2c2c2c;
            font-size:20px;
            font-weight:500;
        }
        #btn{
            width: 35%;
            height: 20%;
            margin-left: 45%;
            margin-top: 17%;
            font-size: 17px;
        }
    </style>
</head>
<body>   
    <nav>
        <div class="head">
            <header>
                <h1>LAYANANMASYARAKAT</h1>
            </header>
            <div class="menu">
                <ul>
                    <li>
                        <a href="<?php echo site_url('Home/login');?>">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Home/regis');?>">Register</a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>

    <div class="" id="btn">
        <button type="button" class="btn btn-info">Lapor Sekarang!</button>
    </div>
</body>
</html>
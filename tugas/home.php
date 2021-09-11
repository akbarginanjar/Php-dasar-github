<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body background="asalam.jpg">
    <style>
        body {
            padding:0;
            margin:0;
            font-family:sans-serif; 
            background-size: 1200px;
        }
        nav {
            background: white;
            box-shadow: 0px 3px 10px;
        }
        nav img {
            padding-left: 40px;
        }
        nav a{
            text-align:center;
            color: navy;
            padding-right: 50px;
            font-size: 17px;
            font-weight: bold;
            text-decoration: none;
            width: 120px;
            padding: 5px;
            padding-top: 60px;
            padding-right: 70px;
            float: right;
        }
        nav a:hover {
            color: #1E90FF;
            transition: 0.2s;
            border-bottom: 3px solid yellow;
        }
        .isi {
            text-align: center;
            color: white;
        }
        p {
            font-size: 19px;
        }
        button {
            color: white;
            background: green;
            padding:7px;
            width: 180px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            box-shadow: 0px 3px 10px;
            background: #228B22;
                        transition: 0.3s;
        }
        .footer{
            color: rgba(255, 255, 255, 0.445) ;
            text-align:center;
            font-size: 13px;
        }
    </style>
    <nav>
        <img src="assalaam.png" alt="" width="120">
        <a href="nilai-rata.php">Project 4</a>
        <a href="hotel.php">Project 3</a>
        <a href="bintang.php">Project 2</a>
        <a href="konser.php">Project 1</a>
    </nav><br><br><br><br>

    <div class="isi">
        <h1>SELAMAT DATANG </h1>
        <h2>SMK ASSALAAM BANDUNG</h2>
        <p>RPL | TBSM | TKRO</p>
        <form action="registrasi.php">
            <button>Daftar Sekarang</button>
        </form>
    </div><br><br><br><br><br><br>


    <div class="footer">
        All Right Reserved | Created by Akbar Ginanjar <br>
        smkassalaambandung.sch.id
    </div>

</body>
</html>
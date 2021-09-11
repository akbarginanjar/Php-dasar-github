<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONSER AMAL ASSALAAM BAHAGIA</title>
</head>
<body>
    <style>
        body {
            padding:0;
            margin:0;
            font-family:sans-serif; 
            background: #1E90FF;
        }
        .head {
            background: white;
            height: 90px;
            box-shadow: 0px 0px 10px;
        }
        .head img{
            padding-left: 20px;
        }
        .head h1{
            color: #191970;
            padding-top: 7px;
            float:right;
            padding-right:250px;
        }
        form {
            margin: 40px;
        }
        table {
                        margin: 30px;
                }
                td {
                        font-family:sans-serif;
                        padding: 5px;
                        font-weight: bold;
                        color: white;
                }
                input[type="submit"]{
                    background: green;
                    font-weight: bold;
                    color: white;
                    border: 1px solid green;
                    cursor: pointer;
                    width: 151px;
                    height: 30px;
                }
                input[type="submit"]:hover {
                    background: #228B22;
                        transition: 0.3s;
                }
                input[type="radio"]{
                    width: 50px;
                    height: 14px;
                }
                input[type="reset"]{
                    background: #B22222;
                    font-weight: bold;
                    color: white;
                    border: 1px solid #B22222;
                    cursor: pointer;
                    width: 151px;
                    height: 30px;
                }
                input {
                    width: 400px;
                    height: 25px;
                    border: 1px solid white;
                    border-radius: 3px;
                }
                select {
                    width: 407px;
                    height: 31px;
                    border-radius: 3px;
                    border: 1px solid white;
                }
                
    </style>
    <div class="head">
        <img src="assalaam.png" alt="" width="110">
    <h1>KONSER AMAL ASSLAAM BAHAGIA</h1>
</div><br><br>
    <form action="tampil.php" method="POST">
        <table>
            <tr>
                <td>Nama Pemesan</td><td>:</td><td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kode Studio</td><td>:</td>
                <td><select name="kode">
                    <option value="studio1" name="studio1">Studio 1</option>
                    <option value="studio2" name="studio2">Studio 2</option>
                </select></td>
            </tr>
            <tr>
                <td>Jenis Kelas</td><td>:</td>
                <td>
                    <input type="radio" name="kelas" value="VIP">VIP
                    <input type="radio" name="kelas" value="FESTIVAL">FESTIVAL
                </td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td><td>:</td><td><input type="text" name="jumlah_tiket" required></td>
            </tr>
            <tr>
                <td></td><td></td><td><input type="submit" name="simpan" value="Kirim">
            <input type="reset" name="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</body>
</html>
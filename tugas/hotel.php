<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Hotel</title>
</head>
<body background="hotel.jfif">
<style>
                body {
                    background-size: cover;
                    background-repeat: no-repeat;
                        padding: 0;
                        margin: 0;
                }
                .head {
                        background: black;
                        overflow: hidden;
                        text-align: center;
                        font-family: sans-serif;
                        color: black;
                        border-bottom: 2px solid gray;
                        box-shadow: 0px 3px 10px;
                }
                .head h1 {
                    color: white;
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
                input[type="reset"]{
                    background: #B22222;
                    font-weight: bold;
                    color: white;
                    border: 1px solid #B22222;
                    cursor: pointer;
                    width: 151px;
                    height: 30px;
                }
                input[type="date"]{
                    width: 303px;
                    height: 31px;
                }
                input {
                    width: 300px;
                    height: 25px;
                    border: 1px solid gray;
                    border-radius: 3px;
                }
                select {
                    width: 307px;
                    height: 31px;
                    border-radius: 3px;
                }
        </style>
        <div class="head">
                <h1>Pendataan Tamu Hotel</h1>
        </div>
    <table width="500">
    <form action="tampil-hotel.php" method="POST">
        <tr>
            <td>Tanggal menginap</td>
            <td>:</td>
            <td><input type="date" name="tanggal" required></td>
        </tr>
        <tr>
            <td>Masukan nama</td>
            <td>:</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>No identitas</td>
            <td>:</td>
            <td><input type="text" name="identitas"></td>
        </tr>
        <tr>
            <td>Tipe Kamar</td>
            <td>:</td>
            <td><select name="tipe">
                <option value="Superior" name="superior">Superior</option>
                <option value="Deluxe" name="deluxe">Deluxe</option>
                <option value="JuniorSuite" name="js">Junior Suite</option>
            </select></td>
        </tr>
        <tr>
            <td>Durasi Menginap</td>
            <td>:</td>
            <td><input type="text" name="durasi"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Kirim">
            <input type="reset" name="reset" value="Reset"></td>
        </tr>
    </form>
</table>
<br><br>

</body>
</html>
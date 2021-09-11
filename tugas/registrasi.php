<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISRASI SISWA BARU</title>
</head>
<body><br>

<style>
     body {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            background:  #1E90FF;
        }
        form {
            background: white;
            width: 40%;
            border-radius: 5px;
        }
        form h3 {
            color: navy;
        }
        input[type="text"] {
            width: 190px;
            padding: 3px;
            background: whitesmoke;
            border: 1px solid gray;
        }
        textarea {
            background: whitesmoke;
            border: 1px solid gray;
        }
        input[type="submit"]{
                    background: green;
                    font-weight: bold;
                    color: white;
                    border: 1px solid green;
                    cursor: pointer;
                    padding: 5px;
                    width: 155px;
                }
                input[type="submit"]:hover {
                    background: #228B22;
                }
                input[type="reset"]{
                    background: #B22222;
                    font-weight: bold;
                    color: white;
                    border: 1px solid #B22222;
                    cursor: pointer;
                    padding: 5px;
                    width: 155px;
                }
                a {
                    color: gray;
                    text-decoration: none;
                    font-size: 13px;
                }
                input[type="submit"]:hover{
                    background: 
                }
                a:hover {
                    text-decoration: underline;
                }
</style>

    <center>
        
    <form action="list.php" method="POST">
    <img src="assalaam.png" width="170">
    <h3>REGISRASI SISWA BARU</h3>
    <table>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Nama Siswa ..." required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jk" placeholder="Jenis Kelamin ..." required></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" placeholder="Kelas ..." required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" cols="25" rows="3" placeholder="Alamat ...." required></textarea></td>
        </tr>
        <tr>
            <td colspan=3 align='center'>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="reset">
            </td>
        </tr>
    </table><br>
    <a href="list.php">kembali</a><br><br><br><br>
</form>
</center>
</body>
</html>
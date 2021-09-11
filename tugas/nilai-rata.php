<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Nilai</title>
</head>
<body>
    <style>
        body {
            padding:0;
            margin:0;
            font-family:sans-serif; 
            background: #1E90FF;
        }
        .form form {
      width: 70%;
      background: white;
      height: 110px;
      text-align: center;
      padding-top: 20px;
      font-weight: bold;
      font-size: 18px;
      border-top: 5px solid  #191970;
    }
    .form form input {
      width: 500px;
      padding: 5px;
      border: 1px solid gray;
    }
    .form form input[type="submit"] {
      width: 100px;
      cursor: pointer;
      background: green;
      color: white;
      font-weight: bold;
      border:1px solid green;
    }
    input[type="submit"] {
      width: 300px;
      padding: 5px;
      cursor: pointer;
      background: green;
      color: white;
      font-weight: bold;
      border:1px solid green;
    }
    .form form input[type="submit"]:hover {
      background: #228B22;
    }
    input[type="submit"]:hover {
      background: #228B22;
    }
    .bungkus form input[type="text"] {
        width: 600px;
        padding: 5px;
        background: whitesmoke;
        border: 1px solid gray;
    }
    .bungkus form input[type="text"]:focus {
        width: 625px;
        transition: 0.1s;
    }
    .bungkus {
      background: white;
      width: 67.2%;
      text-align: left;
      padding-left: 30px;
      font-weight: bold;
    }
    </style><br><br>
<center>
    <div class="form">
<form action="" method="POST">
    Masukan banyaknya bilangan <br><br>
    <input type="number" name="n" required>
    <input type="submit" name="submit" value="submit">
</form></center>
</div>
<center>

<div class="bungkus">

<?php

if (isset($_POST['submit'])) {
$n = $_POST['n'];
echo "<form method='post' action='proses-rata.php'>";
for ($i = 0; $i <= $n-1; $i++)
{
    echo "Bil ke-".($i+1)." <input type='text' name='data".$i."' required/><br><br>";
}
echo "<center><input type='submit' name='submit' value='Submit' /></center><br>";
echo "<input type='hidden' name='n' value='".$n."' />";
echo "</form>";

}

?></center>
    </div>
</body>
</html>
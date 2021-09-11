<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang</title>
</head>
<body><br><br>
  <style>
    body {
      background: #1E90FF;
      padding: 0;
      margin: 0;
      font-family: sans-serif;
    }
    form {
      width: 70%;
      background: white;
      height: 150px;
      border-radius: 5px;
      text-align: center;
      padding-top: 20px;
      font-weight: bold;
      font-size: 18px;
      border-top: 5px solid  #191970;
    }
    input {
      width: 500px;
      padding: 5px;
      border: 1px solid gray;
    }
    input[type="submit"] {
      width: 200px;
      cursor: pointer;
      background: green;
      color: white;
      font-weight: bold;
      border: 0;
    }
    input[type="submit"]:hover {
      background: #228B22;
    }
    .bungkus {
      background: white;
      width: 80%;
      text-align: left;
      border-radius: 5px;
      border-right: 5px solid  #191970;
      padding-left: 30px;
      font-weight: bold;
    }
    
  </style>
  <center>
    <form action="" method="POST">
        MASUKAN BINTANG <br><br>
        <input type="number" name="bintang" required><br><br>
        <input type="submit" name="submit" value="submit">
    </form></center><br><br><br>

    <center>
    <div class="bungkus">
    <?php 
        echo "<br>";
        echo "PROGRAM BINTANG";
    echo "<br><br>";
    if (isset($_POST['submit'])) {
        $nil = $_POST['bintang'];

        for ($i = 1; $i <= $nil; $i++) {
            for ($b = 1; $b <= $i; $b++){
                echo "*";
            }
            echo "<br>";
        }
   
        echo "Ini adalah bilangan genap : <br>";

$nil = $_POST['bintang'];
$bintang = 2;
while ($bintang <= $nil) {
  if ($bintang % 2 == 0) {
      echo "" . $bintang . "<br/>";
      $bintang++;
    } else {
      $bintang++;
    }
}

echo "Ini adalah bilangan ganjil : <br>";

$nil = $_POST['bintang'];
$bintang = 0;
while ($bintang <= $nil) {
  if ($bintang % 2 == 0) {
      $bintang++;
    } else {
        echo "" . $bintang . "<br/>";
      $bintang++;
    }
}
 }
 echo "<br><br>";

    ?>
</div></center><br><br><br>
</body>
</html>
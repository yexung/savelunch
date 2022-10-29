<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>xxpodo</title>
    <link rel="stylesheet" href="style.css">
  </head>
<center>
    <font size="20">
        <br>
        <br>
<?php

$hostname = 'localhost';
$username = 'yesungyun1';
$password = 'ys01290129@';
$dbname = 'xxpodo'; //데이터베이스 이름
$conn = mysqli_connect($hostname, $username, $password, $dbname);


        $qurry2="select * from sensor";
        $mysql_result=mysqli_query($conn,$qurry2);
      while($row=mysqli_fetch_array($mysql_result))
       {
        if ($row['sensor2'] == 0){
                     echo("다음반 내려오세요~");
                     echo("\n실시간 혼잡도 : 🟢");

        }else{
                    echo("다음반 대기해주세요~");
                    echo("\n실시간 혼잡도 : 🔴");
        }
        
    }

?>
</center>
</font>
</html>
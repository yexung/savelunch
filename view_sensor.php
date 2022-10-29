        
     <?php

$hostname = 'localhost';
$username = 'yesungyun1';
$password = 'ys01290129@';
$dbname = 'xxpodo'; //데이터베이스 이름
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if($conn)
{
                echo("연결완료<br>");
}else{
                echo("연결실패<br>");
}

        $qurry2="select * from sensor";
        $mysql_result=mysqli_query($conn,$qurry2);
      while($row=mysqli_fetch_array($mysql_result))
       {
                      echo $row['sensor1']."----".$row['sensor2']."----".$row['sensor3']."----".$row['sensor4']."<br>";
        }
        echo("실시간 센서 현황");
             
?>
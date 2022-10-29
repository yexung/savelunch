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

     
        $sensor1=$_POST['sensor1'];     
        $sensor2=$_POST['sensor2'];
        $sensor3=$_POST['sensor3'];  
        $sensor4=$_POST['sensor4']; 
        echo "<script>alert('{$sensor1}');</script>"; 
        echo "<script>alert('{$sensor2}');</script>"; 
        echo "<script>alert('{$sensor3}');</script>"; 
        echo "<script>alert('{$sensor4}');</script>"; 
        $qurry1 = "update sensor set sensor1 = '$sensor1', sensor2 = '$sensor2', sensor3 = '$sensor3', sensor4 = '$sensor4'";
        mysqli_query($conn,$qurry1);

        
     
        $qurry2="select * from sensor";
        $mysql_result=mysqli_query($conn,$qurry2);
      while($row=mysqli_fetch_array($mysql_result))
       {
                      echo $row['sensor1']."----".$row['sensor2']."----".$row['sensor3']."----".$row['sensor4']."<br>";
        }
        echo("데이터베이스 접속해서 데이터 가져오기2<br>");
             
?>
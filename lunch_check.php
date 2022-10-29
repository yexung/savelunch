<?php

include 'session.php';

$hostname = 'localhost';
$username = 'yesungyun1'; //아이디
$password = 'ys01290129@';
$dbname = 'xxpodo'; //데이터베이스 이름
$conn = mysqli_connect($hostname, $username, $password, $dbname);
  //echo "id 는 ".$_SESSION['id']."입니다.\n";



$id = $_SESSION['id'];
$date = date("Ymd");
$eat = $_POST['eat'];
$jb_sql = "SELECT COUNT(*) FROM vote WHERE $date = date AND $id = id";
$jb_result = mysqli_query( $conn, $jb_sql );
$count = mysqli_num_rows($jb_result);
//echo "<script>alert('{$id}');</script>";
//echo "<script>alert('{$date}');</script>";
//echo "<script>alert('{$eat}');</script>";



//if ($count <> 1) {
//// echo ("값이 없습니다 ");
  //$qurry2 =  "update vote set id = '$id' WHERE date = '$date'";
  //mysqli_query($conn,$qurry2);
//  }else{
  ////  echo ("값이 있습니다");
    $qurry1 = "insert into vote values ('".$id."','".$date."','".$eat."')";
    mysqli_query($conn,$qurry1);
//}

//echo '$count : '.$count.'<br>';

echo "<script>alert('투표완료되셨습니다');</script>";
if($id == admin){
  echo("<script>location.replace('admin.php');</script>"); 
}
else{
  echo("<script>location.replace('main.php');</script>"); 
}

?>


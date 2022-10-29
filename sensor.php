<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>실시간 센서현황</title>
    <script src="clock.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <meta charset="utf-8">
    <title>회원정보</title>
<center>
          <h1>실시간 sensor 현황</h1>
          <div id="time" class="time"></div>
        <div id="date" class="date"></div>

</center>
    <style>
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <td>1번 센서</td>
          <td>2번 센서</td>
          <td>3번 센서</td>
          <td>4번 센서</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $date = date("Ymd");
        header("Refresh:5");
          $jb_conn = mysqli_connect( 'localhost', 'yesungyun1', 'ys01290129@', 'xxpodo' );
          //$jb_sql = "SELECT * FROM savelunch order by id DESC";
      //  $jb_sql = "SELECT * FROM vote order by id DESC";
       //  $jb_sql = "SELECT COUNT(case when eat = 1 then 1 end) FROM vote ";
    // $jb_sql = "SELECT * FROM vote WHERE eat = 1";
    $jb_sql = "SELECT * from sensor";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
    echo '<tr><td>' . $jb_row['sensor1'] . '</td><td>'  . $jb_row['sensor2'] . '</td><td>'  . $jb_row['sensor3'] .'</td><td>'  . $jb_row['sensor4'] .'</td></tr>';
      }
        ?>
      </tbody>
    </table>
<tr>
<center>
<button onclick="location.href='main.php'" class="btn btn-info"> 관리자페이지로 돌아가기 <i class="fa fa-check spaceLeft"></i></button>


</center>	
  </body>
</html>
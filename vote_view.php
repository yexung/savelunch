<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>오늘의 급식조사 현황</title>
    <script src="clock.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <meta charset="utf-8">
    <title>회원정보</title>
<center>
          <h1>오늘의 급식조사 현황</h1>
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
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;날짜</td>
          <td>먹는사람</td>
          <td>안먹는사람</td>
          <td>잘모르겠는사람</td>
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
    $jb_sql = "SELECT date, COUNT(CASE WHEN eat = 1 then 1 ELSE NULL END) AS eat_cnt FROM vote group by date";
    $jb_sql2 = "SELECT date, COUNT(CASE WHEN eat = 2 then 1 ELSE NULL END) AS eat_cnt2 FROM vote group by date";
    $jb_sql3 = "SELECT date, COUNT(CASE WHEN eat = 3 then 1 ELSE NULL END) AS eat_cnt3 FROM vote group by date";
    // $jb_sql = "SELECT * FROM vote";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          $jb_result2 = mysqli_query( $jb_conn, $jb_sql2 );
          $jb_result3 = mysqli_query( $jb_conn, $jb_sql3 );
          $count = mysqli_num_rows($jb_result);
          $count2 = mysqli_num_rows($jb_result2);
          $count3 = mysqli_num_rows($jb_result3);

          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
             $jb_row1 = mysqli_fetch_array( $jb_result2 ); 
             $jb_row2 = mysqli_fetch_array( $jb_result3 ); 
             if( $jb_row['date'] == $date ){
            echo '<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' . $jb_row[ 'date' ] . '</td><td>	&nbsp;	&nbsp;	&nbsp;' . $jb_row['eat_cnt'] . '</td><td>	&nbsp;	&nbsp;	&nbsp;' . $jb_row1['eat_cnt2'] . '</td><td>	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;' . $jb_row2['eat_cnt3'] .'</td></tr>';
             }
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
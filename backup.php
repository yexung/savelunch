<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>오늘의 급식조사 현황</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <meta charset="utf-8">
    <title>회원정보</title>
<center>
          <h1>오늘의 급식조사 현황</h1>
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
          <th>id</th>
          <th>vote</th>
          <th>date</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $jb_conn = mysqli_connect( 'localhost', 'yesungyun1', 'ys01290129@', 'xxpodo' );
          //$jb_sql = "SELECT * FROM savelunch order by id DESC";
      //  $jb_sql = "SELECT * FROM vote order by id DESC";
       //  $jb_sql = "SELECT COUNT(case when eat = 1 then 1 end) FROM vote ";
      $jb_sql = "SELECT * FROM vote WHERE eat = 1";
      $jb_sql2 = "SELECT date FROM vote group by date";
        // $jb_sql = "SELECT * FROM vote";
          $jb_result = mysqli_query( $jb_conn, $jb_sql);
          $jb_result2 = mysqli_query( $jb_conn, $jb_sql2);
          $count = mysqli_num_rows($jb_result);

         echo '$count : '.$count.'<br>';
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>' . $count . '</td></tr>';

          }
          while( $jb_row2 = mysqli_fetch_array( $jb_result2 ) ) {
            echo '<tr><td>' . $jb_row2[ 'date' ] . '</td></tr>';

          }
        ?>
      </tbody>
    </table>
<tr>
<center>
<button onclick="location.href='main.php'" class="btn btn-info"> 메인페이지로 돌아가기 <i class="fa fa-check spaceLeft"></i></button>

<form method=post action='list.php'>
<tr>
	<td width=100% colspan=5 align=center>
		<input type=hidden name=page value=<? echo "$page" ; ?>>
		
		<select name=id>
		<option value=id>아이디</option>
		</select>
		
		<input type=text  name=id size=30>
		<button type="submit" class="btn btn-info">검색<i class="fa fa-check spaceLeft"></i></button>
	</td>
</tr>
</form>
</center>	
  </body>
</html>
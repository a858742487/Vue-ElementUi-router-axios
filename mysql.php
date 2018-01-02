<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Document</title>
</head>
<body>
  <?php
      $conn = mysql_connect("bdm271206512.my3w.com","bdm271206512","5651411a");　//连接mysql数据库　　

mysql_select_db("bdm271206512_db");  //选择数据库　　
$result = mysql_query("select from lgf");//第二个可选参数，指定打开的连接　　

$row = mysql_fetch_row( $result ) ) //只取一行数据　　

echo $row[0]; //输出第一个字段的值　　
  ?>
</body>
</html>
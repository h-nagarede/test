<html lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta charset="UTF-8">
<title>DB登録確認</title>
</head>
<body>
<?

  $link = mysqli_connect("localhost","root","root","userdate");

  $sql = "SELECT * FROM test";
  $result = mysqli_query($link,$sql);

  echo "<table>";
  echo "<tr><th>名前</th><th>年齢</th><th>性別</th><th>メールアドレス</th></tr>";
  while($data = mysqli_fetch_array($result,MYSQLI_BOTH)){
    if($data['sex'] == 1){
      $Sex = "男";
    }
    else{
      $Sex = "女";
    }
    printf("<tr><th>%s</th><td>%s</td><td>%s</td><td>%s</td></tr>",$data['name'],$data['age'],$Sex,$data['mailaddres']);
  }
  echo "</table>";
  printf("%s件ヒット<br>",mysqli_num_rows($result));

?>
<a href="sql_practice.html">php・sqlコマンド練習ページへ戻る</a>
<br>
<a href="index.html">トップページへ戻る</a>
</body>
</html>

<html lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta charset="UTF-8">
<title>php結果</title>
</head>
<body>
<?

  $Name = $_POST['name'];
  $Age = $_POST['age'];
  $Sex = $_POST['sex'];
  $Email = $_POST['email'];

  print("$Name<br>");
  print("$Age<br>");
  if ($Sex == 1){
    print("男性<br>");
  }
  Else{
    print("女性<br>");
  }
  print("$Email<br>");

  $link = mysqli_connect("localhost","root","root","userdate");

  $sql = "INSERT INTO test (`name`,`age`,`sex`,`mailaddres`) VALUES ('$Name','$Age','$Sex','$Email')";
  mysqli_query($link,$sql);

?>
<br>
<a href="sql_practice.html">php・sqlコマンド練習ページへ戻る</a>
<br>
<a href="index.html">トップページへ戻る</a>
</body>
</html>

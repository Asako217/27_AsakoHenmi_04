<?php
// name,actor,directorが空欄だった時
$errors = array();

//1. POSTデータ取得

//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$category = $_POST["category"];
$name = $_POST["name"];
$actor = $_POST["actor"];
$director = $_POST["director"];
$interest = $_POST["interest"];

if($name === ''){
  $errors['name'] = '作品名が入力されていません。';
}

if($memo === ''){
  $errors['actor'] = '主演が入力されていません。';
}  

if($name === ''){
$errors['director'] = '監督が入力されていません。';
}

if(isset($errors)){
  header("Location: index.php");
}


//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
  $pdo = new PDO('mysql:dbname=kadai3;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 //ここにカラム名を入力する
$stmt = $pdo->prepare("INSERT INTO watch_list(id, category, name, actor, director,interest, 
indate)VALUES(NULL, :category, :name, :actor, :director, :interest, sysdate())");
$stmt->bindValue(':category', $category, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':actor', $actor, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':director', $director, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':interest', $interest, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();


//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: index.php");
  exit;

}

if($name)
// カテゴリーの処理
if($category == 1){
  echo '1';
}

else if($category == 2){
  echo '2';
}

else if($category == 3){
  echo '3';
}
else if($category == 4){
  echo '4';
}
else if($category == 5){
  echo '5';
}
else if($category == 6){
  echo '6';
}


?>
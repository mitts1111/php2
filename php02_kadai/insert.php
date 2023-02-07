<?php


$title = $_POST['title'];
$url = $_POST['url'];
$comment = $_POST['comment'];


try {
  $pdo = new PDO('mysql:dbname=gs_bm;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, title, url, comment, date)
                      VALUES(NULL, :title, :url, :comment, sysdate() )");


$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);


$status = $stmt->execute();


if($status === false){

  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．index.phpへリダイレクト
  header('Location: index.php');
}
?>

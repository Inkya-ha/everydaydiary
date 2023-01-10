<?php
session_start();

$username = $_SESSION["EMAIL"];
$date = htmlspecialchars($_POST['date'], ENT_QUOTES, "UTF-8");
$title = htmlspecialchars($_POST['title'], ENT_QUOTES, "UTF-8");
$body = htmlspecialchars($_POST['body'], ENT_QUOTES, "UTF-8");

if (empty($_POST['date'])) {
    echo "Error: 未入力の項目があります";
    exit;
}
if (empty($_POST['title'])) {
    echo "Error: 未入力の項目があります";
    exit;
}
if (empty($_POST['body'])) {
    echo "Error: 未入力の項目があります";
    exit;
}


require_once('config.php');
//データベースへ接続、テーブルがない場合は作成
try {
    $pdo = new PDO(DSN, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("create table if not exists diary(
        email varchar(255),
        date varchar(255),
        title varchar(255),
        body varchar(2000)
    )");
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
}

$stmt = $pdo->prepare("insert into diary (email, date, title, body) values (:email, :date, :title, :body)");
$stmt->bindValue(':email', $username, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':body', $body, PDO::PARAM_STR);
$stmt->execute();


if ($stmt->execute()) {
    echo "正常に投稿できました";
} else {
    echo "投稿処理を完了することができませんでした";
}



?>
<?php
session_start();
$username = $_SESSION["EMAIL"];
if(!isset($_SESSION["EMAIL"])) {
    $no_login_url = "../login";
    header("Location: {$no_login_url}");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once __DIR__ . "/static/head/head.php"; ?>
    <title>トップページ｜毎日日記くん</title>
</head>
<body>
    <?php include_once __DIR__ . "/static/header/header.php"; ?>
    <main>
        <div class="top">
            <p class="fs-1">
                毎日日記くん<br>
                日記管理ページ
            </p>
            <hr>
        </div>
        <div class="panel">
            <p class="fs-5"><?php echo $username;?>様 今日の日記投稿はお済ですか？</p>
            <div class="diarypost">
                <form action="diarypost" method="POST">
                    <p class="fs-2">日記投稿フォーム</p><br>
                    <label class="fs-5" for="投稿日付">投稿日付 : <input type="date" name="date" required></label><br><br>
                    <label class="fs-5" for="タイトル">タイトル : <input type="text" name="title" placeholder="旅行に行った" required></label><br><br>
                    <p class="fs-3">本文</p>
                    <textarea name="body" required placeholder="今日はアメリカに旅行に行きました。今日は〇〇ホテルに泊まって明日はカリフォルニアに行きます。"></textarea>
                    <br><br>
                    <input type="submit" name="submit" value="投稿する">
                    <br><br><br>
                </form>
            </div>
        </div>
    </main>
    <?php include_once __DIR__ . "/static/footer/footer.php"; ?>
</body>
</html>
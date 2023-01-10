<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once __DIR__ . "/static/head/head.php"; ?>
    <title>ログイン｜毎日日記くん</title>
</head>
<body>
    <?php include_once __DIR__ . "/static/header/header.php"; ?>
    <main>
        <div class="top">
            <p class="fs-1">
                新規登録
            </p>
            <hr>
        </div>
        <main class="form-signin w-100 m-auto">
            <form>
                <img class="mb-4" src="./image/favicon.png" alt="毎日日記くん" height="50" loading="lazy">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                    <label for="floatingInput">メールアドレス</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="パスワード">
                    <label for="floatingPassword">パスワード</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="repassword" placeholder="再確認パスワード">
                    <label for="floatingPassword">再確認パスワード</label>
                </div>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
            </form>
            <p class="fs-6">既にアカウントをお持ちですか？<a href="./login">ログイン</a></p>
        </main>
    </main>
    <?php include_once __DIR__ . "/static/footer/footer.php"; ?>
</body>
</html>
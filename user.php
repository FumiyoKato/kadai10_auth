<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>USERデータ登録</title>
</head>
<body>
    <!-- /// ヘッダー領域 /// -->
    <section class="disclaimer_header">
        <!-- WDSアイコンパーツ -->
        <div class="WDS_icon">
            <a href="https://www.weatherdatascience.tokyo/" target="_blank" rel="noopener noreferrer">
                <img src="img/WDSlogo.png" alt="WeahterDataScience_logo">
            </a>
        </div>
        <?php echo $_SESSION["name"]; ?>さん
    </section>

    <!-- Main[Start] -->
    <form method="post" action="user_insert.php">
    <div class="jumbotron">
    <fieldset>
        <legend>ユーザー登録</legend>
        <label>名前：<input type="text" name="name"></label><br>
        <label>Login ID：<input type="text" name="lid"></label><br>
        <label>Login PW<input type="text" name="lpw"></label><br>
        <label>管理FLG：
        一般<input type="radio" name="kanri_flg" value="0">　
        管理者<input type="radio" name="kanri_flg" value="1">
        </label>
        <br>
        <!-- <label>退会FLG：<input type="text" name="life_flg"></label><br> -->
        <input type="submit" value="送信">
        </fieldset>
    </div>
    </form>
<!-- Main[End] -->

    
</body>
</html>
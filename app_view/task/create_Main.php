<?php
    include("../template/head.php");
    include("../template/header.php");
?>

<?php 
    // $errorMessage = [];
    // if(isset($_POST['submit'])){
    //     $param = $_POST;
    //     $tasks = new Tasks();
    //     $tasks->setName($param['name']);
    //     $tasks->setEndDate($param['end_date']);
    //     $tasks->setDescription($param['description']);
    //     $errorMessage = $tasks->validate();
    //     if(!$errorMessage){
    //         // 1.データベースに接続する。
    //         $pdo = new PDO('mysql:dbname=mydl;host=127.0.0.01:8889;' , 'root', 'root');
    //         $pdo->query('SET NAMES utf8;');

    //         // 2.実行したいSQL文をセットする。
    //         $stmt = $pdo->prepare('SELECT * FROM users');

    //         // 3.SQLに対してパラメーターをセットする。【任意】
    //         // $stmt->bindValue(':mail_address', $mail_address, PDO::PARAM_STR);

    //         // 4.実際にSQLを実行する。
    //         $stmt->execute();

    //         // 5.結果を取得する。【任意】
    //         $user = $stmt->fetch();

    //         var_dump($user);
    //         // 6.データーベースから切断する。
    //         unset($pdo);
    //     }
    // };
?>

<body>
    <div class="mt-5 mb-5 container">
        <?php
            if($errorMessage){
                foreach ($errorMessage as $message) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $message;
                    echo '</div>';
                }
            }
        ?>
        <h2>最終目標</h2>
        <form action="/task/regist.php" method="post">
            <div class="form-group row">
                <div  class="col-sm-9">
                    <label class="form-label" for="name">最終目標タイトル</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="col-sm-3">
                    <label class="form-label" for="end_date">終了日</label>
                    <input type="date" class="form-control" name="end_date" id="">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">説明</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-5">
                <a href="/" class="btn btn-success">戻る</a>
                <button type="submit" name="submit" class="btn btn-primary">登録</button>
            </div>
        </form>
    </div>
</body>

<?php
    include("../template/footer.php");
?>
<?php
    include("../template/header.php");
    include("../app/model/TaskInfo.php");
?>

<?php 
    if(isset($_POST['sbumit'])){
        $param = $_POST;
        foreach ($param as $key => $value) {
            echo $value;
        }
    };
?>

<body style="background-color:whitesmoke">
    <div class="mb-5 container">
        <h2>タスク一覧</h2>
        <form action="/task/regist.php" method="post">
            <div class="form-group row">
                <div  class="col-sm-9">
                    <label class="form-label" for="name">タスク名</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="col-sm-3">
                    <label class="form-label" for="end_date">終了日</label>
                    <input type="date" class="form-control" name="end_date" id="">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="discription">説明</label>
                <textarea name="discription" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-5">
                <button type="submit" name="sbumit" class="btn btn-primary">登録</button>
            </div>
        </form>
    </div>
</body>

<?php
    include("../template/footer.php");
?>
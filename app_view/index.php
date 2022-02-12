<?php
    include("./template/head.php");
    include("./template/header.php");
    include("./template/greeting.php");
?>

<body style="background-color:whitesmoke">
    <div class="my-5 container">
        <div class="center-block">
            <div class="row m-2">
                <h2>タスク一覧</h2>
                <div class="text-right">
                    <a href="/task/regist.php" class="btn btn-primary ml-5">タスクを登録</a>
                </div>
            </div>
            <table class="table table-dark table-striped table-bordered table-hover">
                <tbody>
                    <tr class="text-center">
                        <th>タスク名</th>
                        <th>期日</th>
                        <th>完了</th>
                    </tr>
                    <tr class="text-center">
                        <td class="text-left">Task_1入力値aaaaa</td>
                        <td>Task_dl_1<br>残日数：Task_1_date日</td>
                        <td><a href="" class="btn btn-primary">完了</a></td>
                    </tr>
                    <tr class="text-center">
                        <td class="text-left">Task_2入力値</td>
                        <td>Task_dl_2<br>残日数：Task_2_date日</td>
                        <td><a href="" class="btn btn-primary">完了</a></td>
                    </tr>
                    <tr class="text-center">
                        <td class="text-left">Task_3</td>
                        <td>Task_dl_3<br>残日数：Task_3_date日</td>
                        <td><a href="" class="btn btn-primary">完了</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

<?php
    include("./template/footer.php");
?>
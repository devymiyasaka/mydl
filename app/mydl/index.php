<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dead Line</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <header style="background-color:gray">Header</header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2" style="background-color:red;">Red</div>
            <div class="col-sm-8 hidden-sm" style="background-color:blue;">
                <button type="button" class="btn btn-primary">登録</button>
            </div>
            <div class="col-sm-2" style="background-color:yellow;">Yellow</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2" style="background-color:red;">Red</div>
            <div class="col-sm-8 hidden-sm" style="background-color:blue;">Blue</div>
            <div class="col-sm-2" style="background-color:yellow;">Yellow</div>
        </div>
    </div>
    <footer style="background-color:gray">Footer</footer>
</body>

</html>
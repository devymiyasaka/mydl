<?php
    include("./template/head.php");
    include("./template/header.php");
?>

<body class="text-center">
    <!-- <a id="skippy" class="sr-only sr-only-focusable" href="https://getbootstrap.jp/docs/4.3/examples/sign-in/#content">
  <div class="container">
    <span class="skiplink-text">Skip to main content</span>
  </div>
</a> -->

<div class="container pt-5">
    <div class="col-md-4 mx-auto">
        <div>
            <form class="form-signin">
            
            <h1 class="h3 mb-3 font-weight-normal">My DeadLine</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <!-- <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div> -->
            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Sign in create_Main.phpに遷移</button>
            <p class="mt-5 mb-3 text-muted">@FRESS × WEBLOM</p>
            </form>
        </div>
    
    </div>

</div>



</body>
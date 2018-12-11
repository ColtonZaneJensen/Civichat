<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="/assets/pictures/Civichat.png" width="90"  alt="">
    </a>



        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="nav-link" href="/rooms/index.php">Broswe Rooms</a>



        <?php
        //check if user is logged in. Show welcome links
            $u = new User;

            if( $_SESSION['user_logged_in'] ){

                $user = $u->get_by_id($_SESSION['user_logged_in']);

                ?>



        <div class="login-form">

            <div class="loggedInLinks">

                <div class="row">

                    <div class="col-4">
                        <a href="/">Home</a>
                    </div>

                    <div class="col-4">
                        <a href="/users/index.php">Profile</a>
                    </div>

                    <div class="col-4">
                        <a href="#">Blog</a>
                    </div>

                </div>

            </div>

            <a href="/users/logout.php" class="btn loginLogoutBTN my-2 my-sm-0" type="submit">Log out</a>


        </div>

    <?php }else{ //user not logged in. ?>

        <div class="login-form">

            <?=!empty($_SESSION['login_attempt_msg']) ? $_SESSION['login_attempt_msg'] : ''?>

            <form class="form-inline loginFormQuery" action="/users/login.php" method="post">

                <label class="login-label">Username</label>
                <input name="username" class="login-field mr-sm-2" type="text">

                <label class="login-label nav-item">Password</label>
                <input name="password" class="login-field mr-sm-2" type="password">

                <button class="btn loginLogoutBTN my-2 my-sm-0" type="submit">Log in</button>
            </form>
        </div>

    <?php } ?>





</div><!--#navbarNav-->




  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>

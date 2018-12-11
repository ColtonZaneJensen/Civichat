<?php  require_once("../core/includes.php");
    // unique html head vars
    $title = 'Home Page';
    require_once("../elements/html_head.php");
    require_once("../elements/nav.php");
?>

<div class="signup-bg">
    <div class="container">

        <div>

            <div class="row">

                <div class="col-sm-5 mx-auto center-block">
                    <form class="signupForm" action="/users/add.php" method="post">

                        <div class="formSection">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" value="" required>
                        </div>

                        <div class="formSection">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" value="" required>
                        </div>

                        <div class="formSection">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" value="" required>
                        </div>

                        <input class="btn btn-primary" type="submit" name="submit" value="Continue">

                        <a href="/">Already have an account?</a>

                        <p>By registering you agree to our <a href="/">Terms of Service</a> and <a href="/">Privacy Policy<a/></p>

                    </form>



                </div>


            </div>

        </div>

    </div><!-- .container -->
</div><!-- .signup-bg -->

 <br><br><br><br><br><br><br><br><br>



<?php require_once("../elements/footer.php");

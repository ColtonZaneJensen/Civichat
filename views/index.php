<?php  require_once("../core/includes.php");
    // unique html head vars
    $title = 'Home Page';
    require_once("../elements/html_head.php");
    require_once("../elements/nav.php");

?>


<div class="index-bg">

        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <img class="logo-index" src="/assets/pictures/Civichat.png" alt="Civichat logo">
                </div>

            </div> <!--.row-->

            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4 center-block">
                    <div>
                        <p class="indexP">
                            Remeber the good old days of chatrooms?
                            <br>
                            Well this is a forum or something I guess
                            <br>
                            Experience them again with a modern take.
                            <br>
                            Engage with others all over the world.
                            <br>
                            The new old social media.
                        </p>
                    </div>


                </div><!--.col-sm-4-->
                <div class="col-sm-4">

                </div>

            </div><!--.row-->
            <div class="row">
                <div class="col-sm-12">
                    <h1 id="join">Sign up now and join the disscussion!</h1>

                    <a class="join-btn" href="/signup.php">Join now!</a>

                </div>
            </div><!--.row-->
<br><br><br><br>
        </div><!-- .container -->
    </div>




<?php require_once("../elements/footer.php");

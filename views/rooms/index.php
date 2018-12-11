<?php  require_once("../../core/includes.php");
    // unique html head vars
    $title = 'Home Page';
    require_once("../../elements/html_head.php");
    require_once("../../elements/nav.php");

?>

<div class="rooms-bg">

    <div class="container">

        <div class="row">

            <div class="mx-auto">

                <div class="roomsHead">

                    <h1>Rooms!</h1>
                    <p>Join a disscission.</p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-3 roomCol">

                <div class="row rooms">

                    <div class="col-sm-5">

                        <div class="roomTopicImg">

                            <a href="/rooms/chatroom.php">
                                <img  class="recentImg" src="../assets/pictures/topic001.jpg" alt="">
                            </a>

                        </div>

                    </div>

                    <div class="col-sm-7 roomBlock">
                        <a href="/rooms/chatroom.php">
                            <h4 class="RecentH4">Video Games</h4>
                        </a>

                    </div>

                </div> <!-- .row -->

                <div class="row rooms">

                    <div class="col-sm-5">

                        <div class="roomTopicImg">

                            <img  class="recentImg" src="../assets/pictures/topic003.jpg" alt="">

                        </div>

                    </div>

                    <div class="col-sm-7 roomBlock">

                        <a href="/rooms/showsroom.php">
                            <h4 class="RecentH4">Shows</h4>
                        </a>

                    </div>

                </div> <!-- .row -->

                <div class="row rooms">

                    <div class="col-sm-5">

                        <div class="roomTopicImg">

                            <img  class="recentImg" src="/assets/pictures/topic002.jpg" alt="">

                        </div>

                    </div>

                    <div class="col-sm-7 roomBlock">

                        <h4 class="RecentH4">Movies</h4>

                    </div>

                </div> <!-- .row -->

            </div><!--.col-sm-3-->

            <div class="col-sm-3 roomCol">

                <div class="row rooms">

                    <div class="col-sm-5">

                        <div class="roomTopicImg">

                            <img  class="recentImg" src="../assets/pictures/topic004.jpg" alt="">

                        </div>

                    </div>

                    <div class="col-sm-7 roomBlock">

                        <h4 class="RecentH4">Music</h4>

                    </div>

                </div> <!-- .row -->

                <div class="row rooms">

                    <div class="col-sm-5">

                        <div class="roomTopicImg">

                            <img  class="recentImg" src="../assets/pictures/topic005.jpg" alt="">

                        </div>

                    </div>

                    <div class="col-sm-7 roomBlock">

                        <h4 class="RecentH4">Quantum Theory</h4>

                    </div>

                </div> <!-- .row -->

                <div class="row rooms">

                    <div class="col-sm-5">

                        <div class="roomTopicImg">

                            <img  class="recentImg" src="../assets/pictures/topic006.png" alt="">

                        </div>

                    </div>

                    <div class="col-sm-7 roomBlock">

                        <h4 class="RecentH4">Making Fetch Happen</h4>

                    </div>

                </div> <!-- .row -->


            </div><!--.col-sm-3-->


        </div><!--.row-->

        <br><br><br><br>

    </div><!--.container-->

</div><!--.rooms-bg-->

<?php require_once("../../elements/footer.php");

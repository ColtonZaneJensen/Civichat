<?php  require_once("../../core/includes.php");
    // unique html head vars
    $title = 'Home Page';
    require_once("../../elements/html_head.php");
    require_once("../../elements/nav.php");

    if( !empty($_GET['id']) ){ // check if user id is in url
        $id = (int)$_GET['id'];
        $user = $u->get_by_id($id);
    }



?>


<div class="usersIndex-bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-4">

                    <div class="card friendsCard">

                        <h2 id="friendsH2">Friends (Under Construction)</h2>

                        <div class="row friendsGrp">

                            <div class="col-sm-2 friendsPic">

                                <img class="img-fluid" src="../assets/pictures/profile001.jpg" alt="">

                            </div>
                            <div class="col-sm-2 friendsPic">

                                <img class="img-fluid" src="../assets/pictures/profile002.jpg" alt="">

                            </div>
                            <div class="col-sm-2 friendsPic">

                                <img class="img-fluid" src="../assets/pictures/profile003.jpg" alt="">

                            </div>
                            <div class="col-sm-2 friendsPic">

                                <img class="img-fluid" src="../assets/pictures/profile004.jpg" alt="">

                            </div>
                            <div class="col-sm-2 friendsPic">

                                <img class="img-fluid" src="../assets/pictures/profile005.jpg" alt="">

                            </div>
                            <div class="col-sm-2 friendsPic">

                                <img class="img-fluid" src="../assets/pictures/profile006.jpg" alt="">

                            </div>

                        </div><!--.row-->

                    </div><!--.card-->



                </div><!--col-sm8-->

                <div class="col-sm-8 ">

                    <div class="card profile">

                        <div class="row">

                            <div class="col-sm-4">

                                <div class="profilePicArea">

                                    <img class="img-fluid userProfilePic" src="/assets/files/<?=!empty(trim($user['profilePic'])) ? $user['profilePic'] : 'profile-photo-generic.png'?>">

                                </div>

                            </div>

                            <div class="col-sm-4">

                                <h2 id="userProfileName"><?=$user['username']?></h2>

                            </div>

                            <div class="col-sm-4 profileNote">

                                <h5><strong>Note</strong></h5>

                                <p>
                                    <?=$user['description']?>
                                </p>

                            </div>

                        </div> <!--.row-->

                        <?php

                        if( $user['id'] == $_SESSION['user_logged_in']){
                            echo '<a class="editProfileBTN" href="/users/edit.php">Edit profile</a>';
                        }

                         ?>


                    </div><!--.card-->

                    <div class="card" id="recentCard">

                        <h3>Recent rooms (Under Construction)</h3>

                        <div class="row">

                            <div class="col-sm-3 recentRoom">

                                <div class="row">

                                    <div class="col-sm-5">

                                        <div class="roomCardsImg">

                                            <img  class="recentImg" src="../assets/pictures/topic001.jpg" alt="">

                                        </div>

                                    </div>

                                    <div class="col-sm-7">

                                        <h4 class="RecentH4">Video Games</h4>

                                    </div>


                                </div> <!-- .row -->

                            </div>

                            <div class="col-sm-3 recentRoom">

                                <div class="row">

                                    <div class="col-sm-5">

                                        <div class="roomCardsImg">

                                            <img  class="recentImg" src="../assets/pictures/topic002.jpg" alt="">

                                        </div>

                                    </div> <!-- .col-sm-5 -->

                                    <div class="col-sm-7">

                                        <h4 class="RecentH4">Movies</h4>

                                    </div> <!--.col-sm-7-->

                                </div> <!--.row-->

                            </div>

                            <div class="col-sm-3">

                                <div class="row">

                                    <div class="col-sm-5">

                                    </div> <!-- .col-sm-5 -->

                                    <div class="col-sm-7">

                                    </div> <!--.col-sm-7-->

                                </div> <!--.row-->

                            </div>

                            <div class="col-sm-3">

                                <div class="row">

                                    <div class="col-sm-5">

                                    </div> <!-- .col-sm-5 -->

                                    <div class="col-sm-7">

                                    </div> <!--.col-sm-7-->

                                </div> <!--.row-->

                            </div>


                        </div><!--.row-->

                    </div> <!--.card-->

                    <div class="card">

                        <h3 class="messageCardH3" >Direct Message (Under Construction)</h3>

                        <div class="row">

                            <div class="col-sm-10 card messageCard">

                                    <i class="far fa-plus-square"></i>

                                    <input type="text" name="" value="" placeholder="Type message here">

                            </div>

                        </div><!--.row-->

                    </div><!--.card-->




                </div> <!--col-sm-8-->


            </div> <!--.row-->



        </div><!-- .container -->
    </div>



<?php require_once("../../elements/footer.php");

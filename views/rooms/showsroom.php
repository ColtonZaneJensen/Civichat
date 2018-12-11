<?php  require_once("../../core/includes.php");
    // unique html head vars
    $title = 'Home Page';
    require_once("../../elements/html_head.php");
    require_once("../../elements/nav.php");

?>

<div class="chatRoom-bg">

    <div class="container">

        <div class="row">

            <div class="col-sm-3">

                <div class="card userNote">


                    <div id="roomTitle" class="row">

                        <div class="col-sm-5">

                            <div class="roomTopicImg">

                                <img  class="recentImg" src="../assets/pictures/topic003.jpg" alt="">

                            </div>

                        </div>

                        <div class="col-sm-7">

                            <h2 class="roomName">Shows</h2>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12">

                            <p>Welcome to our shows discussion chatroom!</p>
                            <p>Please read the rules</p>
                            <ol>
                                <li>Be kind</li>
                                <li>Don't be unkind</li>
                                <li>Stay on topic</li>
                            </ol>

                            <div class="list-group">

                                    <form class="form-group" action="/rooms/chatroom.php" method="get">

                                        <div class="form-group searchBits">

                                            <label>Search the Chat</label>
                                            <input type="text" name="search">

                                        </div>

                                        <input class="searchFormInput" type="submit" value="Submit">

                                    </form>

                                </div>

                        </div>


                    </div><!--.row-->

                </div>

            </div><!--.col-sm-3-->



            <div class="col-sm-6 card messageMediaQ">

                <div id="messageWrapper">

                    <?php
                        $p = new Post;
                        $posts = $p->get_all();

                        foreach ($posts as $post){
                    ?>

                    <div class="card-body chatFeed">

                        <div class="row">

                            <div class="col-sm-1 no-pad">
                                <div class="profile-pic-chat">
                                    <img class="img-fluid chatProfilePic" src="/assets/files/<?=!empty(trim($post['profilePic'])) ? $post['profilePic'] : 'profile-photo-generic.png'?>">
                                </div>

                                <div class="">
                                    <p><?php

                                            if( $post['user_id'] == $_SESSION['user_logged_in'] ){ ?>
                                                <div class="dropdown">

                                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                                                    <a href="/posts/edit.php?id=<?=$post['id']?>" class="dropdown-item">
                                                        <i class="fas fa-pen"></i>
                                                    </a>

                                                    <a class="delete-btn text-danger"
                                                    href="/posts/delete.php?id=<?=$post['id']?>" class="dropdown-item">
                                                        <i class="far fa-minus-square"></i>
                                                    </a>

                                                </div>
                                            </div>

                                        <?php
                                            }
                                         ?></p>

                                </div>
                            </div>

                            <div class="col-sm-11">


                                <h5 class="postUsername">
                                    <a href="/users/index.php?id=<?=$post['user_id']?>"><?=$post['username']?></a>
                                </h5>

                                <?php
                                if( !empty($post['filename'])){
                                 ?>
                                <img class="img-fluid postMessage" src="/assets/files/<?=$post['filename']?>">

                                <?php } ?>

                                <p class="postMessage"><?=$post['message']?></p>
                                <p class="postTime"><?=date('M. D, Y h:i a', $post['posted_time'])?></p>

                            </div>
                        </div>
                    </div><!--.card-body-->

                <?php } ?>


            </div> <!-- #messageWrapper-->

            <?php if( $user['user_id'] == $_SESSION['user_logged_in'] ){ ?>

                <div id="joinUs" class="messageArea">
                    <a id="signupMessageArea" href="/signup.php">
                         <h4 class="joinUsText">Create an account to join the disscussion!</h4>
                    </a>
                </div>

            <?php }else{ ?>
                <form class="messageBox" action="/posts/add.php" method="post" enctype="multipart/form-data">
                        <img class="img-fluid" id="img-preview">
                        <div class="messageArea">

                            <div class="form-group">




                                <div class="form-group">


                                    <div class="row messageHere">

                                        <div class="col-1">

                                            <label id="uploadIcon" for="file-with-preview">

                                                <i class="far fa-images"></i>

                                            </label>

                                            <input id="file-with-preview" type="file" name="fileToUpload" onchange="previewFile()">

                                        </div><!-- .col-1 -->
                                        <div class="col-11">

                                            <textarea class="form-control textMessage" name="message" placeholder="Type message here"></textarea>

                                        </div><!-- .col-1 -->
                                    </div><!-- .row -->


                                </div>


                            </div>

                        </div>




                        <input class="btn btn-primary submitBtn" type="submit" value="Submit">

                </form>
                <?php } ?>


            </div><!--.col-sm-6-->

            <div class="col-sm-3">

                <div class="card">
                    <?php if( $user['user_id'] == $_SESSION['user_logged_in'] ){ ?>

                    <?php }else{ ?>
                    <div class="row usernameAndProfilePic ">

                        <div class="col-sm-6 no-pad" id="profileCard">

                            <div class="loggedUserInfo">

                                <img class="img-fluid loggedInPic" src="/assets/files/<?=!empty(trim($user['profilePic'])) ? $user['profilePic'] : 'profile-photo-generic.png'?>">

                            </div>

                        </div>

                        <div class="col-sm-6" id="usernameCol6">

                            <div class="usernameHolder">

                                    <a class="loggedUserName" href="/users/index.php?id=<?=$user['user_id']?>"><?=$user['username']?></a>

                            </div>

                        </div>

                    </div><!--.row-->

                    <div class="row userNote">

                        <div class="col-sm-12">

                            <h4>Note</h4>
                            <p><?=$user['description']?></p>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12">

                            <a class="gotoEditBTN" href="/users/edit.php">EDIT PROFILE</a>

                        </div>

                    </div>



                    <?php } ?>
                </div><!--.card-->

            </div><!--.col-sm-3-->

        </div><!--.row-->




<br><br>
    </div><!--.container-->

</div>










<?php require_once("../../elements/footer.php");

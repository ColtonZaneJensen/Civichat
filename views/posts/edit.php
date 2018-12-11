<?php  require_once("../../core/includes.php");

if( !empty($_GET)){ // Check url has an id in interface

    $p = new Post;
    $post = $p->get_by_id($_GET['id']);

    if( !empty($_POST) ){ // Check if form was submitted

        $p->edit($_GET['id']);
        header("Location: /rooms/chatroom.php");
        exit();
    }

}else{
    header("Location: /");
    exit();
}

    // unique html head vars
    $title = 'Edit Post';
    require_once("../../elements/html_head.php");
    require_once("../../elements/nav.php");








    // $u->testing_autoloader();
?>
<div class="edit-bg">


    <div class="container">

        <div class="boarder-dark mt-3">

                <div class="row">

                    <div class="col-md-8 cardCard">

                        <div class="card border-success mt-3">

                            <div class="card-header">

                                    <h4>Edit Message</h4>

                            </div><!--.card-header-->



                            <div class="card-body">

                                <form class="editForm" method="post" enctype="multipart/form-data">
                                        <img class="img-fluid" id="img-preview" src="/assets/files/<?=$post['filename']?>">
                                        <div class="form-group">

                                            <input id="file-with-preview" type="file" name="fileToUpload" onchange="previewFile()" >

                                        </div>


                                        <div class="form-group">

                                            <textarea class="form-control editMessage" name="message" placeholder="Change message here" ><?=$post['message']?></textarea>

                                        </div>

                                        <input class="btn btn-primary" type="submit" value="Submit">

                                </form>

                            </div><!--.card-body-->

                        </div><!-- .card -->



                    </div><!-- col-md-8 -->

                </div><!--.row-->









    </div><!-- .container -->

</div><!--edit-bg-->


<?php require_once("../../elements/footer.php");

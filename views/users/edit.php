<?php require_once '../../core/includes.php';

$u = new User;

if( !empty($_POST) ){ //Form was submitted
    $u->edit();
    header('Location: /users/');
    exit();
}

$user = $u->get_by_id($_SESSION['user_logged_in']);

$title = 'Edit profile';
require_once '../../elements/html_head.php';
require_once '../../elements/nav.php';
?>
<div class="edit-bg">

<div class="container">


        <div class="row">

            <div class="col-sm-6 card editCard">

                <h2>Edit Profile</h2>

                <form class="editForm" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" type="text" name="username" value="<?=$user['username']?>" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Keep empty to keep same password">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" value="<?=$user['email']?>" required>
                    </div>

                    <hr>


                    <div class="form-group">
                        <label>Profile Pic</label>
                        <div class="profilePicArea ml-auto">
                            <img id="img-preview" class="img-fluid" src="/assets/files/<?=!empty(trim($user['profilePic'])) ? $user['profilePic'] : 'profile=photo-generic.jpg'?>" alt="">

                        </div>
                    </div>
                    <div class="form-group">

                        <input type="file" name="profilePic" onchange="previewFile()" id="file-with-preview" class="btn btn-primary" value="">
                        <label class="picSelect" for="file-with-preview">Select Profile Picture</label>

                    </div>

                    <div class="form-group">
                        <label>Note</label>
                        <textarea class="form-control" type="text" name="description"><?=$user['description']?></textarea>
                    </div>

                    <input type="submit" value="Submit" class="btn btn-primary">

                </form>



            </div><!--.col-sm-6-->

        </div> <!--.row-->


</div><!--.container-->

</div><!--.edit-bg-->


<?php require_once '../../elements/footer.php';

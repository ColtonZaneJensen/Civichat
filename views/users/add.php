<?php
require_once '../../core/includes.php';

if( !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) ){

    $u = new User;

    //checks if username already exists
    $exists = $u->exists();

    if( empty($exists) ){//USer does not exist
        $new_user_id = $u->add();
        $_SESSION['user_logged_in'] = $new_user_id;

    }else{
        $_SESSION['create_add_msg'] = '<p class="text-danger">* Username already Exists</p>';
    }


}

header("Location: /");

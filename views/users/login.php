<?php require_once '../../core/includes.php';

if ( !empty($_POST['username']) && !empty($_POST['password']) ){
    $u = new User;
    $u->login();
}

if( !empty($_SERVER['HTTP_REFERER']) ){
    header('Location: '.$_SERVER['HTTP_REFERER']);
}else{
    header('Location: /');
}
exit();

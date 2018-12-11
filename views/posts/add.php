<?php require_once '../../core/includes.php';

if ( !empty($_FILES['fileToUpload']["name"]) || !empty($_POST['message']) ){ //form was submitted
    
    // Add new project to db

    $p = new Post;
    $p->add();

}

header("Location: /rooms/chatroom.php");

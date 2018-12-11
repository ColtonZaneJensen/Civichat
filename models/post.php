<?php

class Post extends Db {

    function get_all(){

        if( !empty($_GET['search']) ){ //They searching something

            $search = $this->params['search'];

            $sql = "SELECT posts.*, users.username, users.profilePic FROM posts LEFT JOIN users ON posts.user_id = users.id WHERE posts.message LIKE '%$search%' ORDER BY posts.posted_time ASC";

        }else{ //They not searching

            $sql = "SELECT posts.*, users.username, users.profilePic FROM posts LEFT JOIN users ON posts.user_id = users.id ORDER BY posts.posted_time ASC";
        }



        $posts = $this->select($sql);

        return $posts;

    }

    function get_by_id($id){
        $id = (int)$id;

        $sql = "SELECT * FROM posts WHERE id = '$id'";

        $post = $this->select($sql)[0];

        return $post;


    }


    function add(){

        $user_id = (int)$_SESSION['user_logged_in'];
        $util = new Util;
        $posted_time = time();

        if ( !empty($_FILES['fileToUpload']["name"]) && !empty($_POST['message']) ){ //form was submitted
            $message = $this->data['message'];
            $filename = $util->file_upload();
            $sql = "INSERT INTO posts (message, user_id, filename, posted_time) VALUES ('$message', '$user_id', '$filename', '$posted_time')";

        }else if ( !empty($_POST['message']) ){
            $message = $this->data['message'];
            $sql = "INSERT INTO posts (message, user_id, posted_time) VALUES ('$message', '$user_id', '$posted_time')";

        }else{
            $filename = $util->file_upload();
            $sql = "INSERT INTO posts (user_id, filename, posted_time) VALUES ('$user_id', '$filename', '$posted_time')";

        } //form was submitted




        $this->execute($sql);

    }

    function delete(){
        $current_user_id = (int)$_SESSION['user_logged_in'];
        $id = (int)$_GET['id'];
        $this->check_owership($id);

        // Delete the old post image files
        $old_post_image = trim($this->get_by_id($id)['filename']);
        if( !empty($post_image) ){
            if( file_exists(APP_ROOT . '//views/assets/files/'.$post_image)){
                unlink( APP_ROOT.'/views/assets/files/'.$post_image); //Deletes a file or folder in php
            }

        }

        $sql = "DELETE FROM posts WHERE id='$id' AND user_id='$current_user_id' ";
        $this->execute($sql);

    }

    function edit($id){



        $id = (int)$id;
        $this->check_owership($id); // Make sure the user owns the post that's being editted


        $message = $this->data['message'];
        $current_user_id = (int)$_SESSION['user_logged_in'];

        if( !empty($_FILES['fileToUpload']['name']) ){ // Check if new file submittted

            // Delete the old post image files
            $old_post_image = trim($this->get_by_id($id)['filename']);
            if( !empty($old_post_image) ){
                if( file_exists(APP_ROOT . '/views/assets/files/'.$old_post_image)){
                    unlink( APP_ROOT.'/views/assets/files/'.$old_post_image); //Deletes a file or folder in php
                }

            }

            $util = new Util;
            $filename = $util->file_upload();

            $sql ="UPDATE posts SET message='$message', filename='$filename' WHERE id=$id AND user_id='$current_user_id'";

            $this->execute($sql);



        }else{ // if no new file was submittted

            $sql ="UPDATE posts SET message='$message' WHERE id=$id AND user_id='$current_user_id'";

            $this->execute($sql);

        }

    }

    function check_owership($id){

        $id = (int)$id;

        $sql = "SELECT * FROM posts WHERE id = '$id'";

        $post = $this->select($sql)[0];

        if( $post['user_id'] == $_SESSION['user_logged_in'] ){
            return true;
        }else{
            header("Location: /");
            exit();

        }

    }



}

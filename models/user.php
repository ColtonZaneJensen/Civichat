<?php
class User extends Db {

    function get_by_id($id){
        $id = (int)$id;

        $sql = "SELECT * FROM users WHERE id = '$id'";

        $user = $this->select($sql)[0];

        return $user;


    }

    function get_all(){

        $sql = "SELECT * FROM `users`";

        $users = $this->select($sql);

        return $users;

    }

        function add(){

            $email = trim($this->data['email']);
            $username = trim($this->data['username']);
            $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); //a hashed password, use this


            $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

            $new_user_id = $this->execute_return_id($sql); //keeps them logged in or something?

            return $new_user_id;

        }

        function exists(){

            $username = $this->data['username'];

            $sql = "SELECT * FROM users WHERE username = '$username'";

            $user = $this->select($sql);

            return $user;
        }

        function login(){

            $_SESSION = array(); //empty session to start fresh.

            //get the user's details from the db and store in in a variable
            $username = $this->data['username'];
            $sql = "SELECT * FROM users WHERE username = '$username'";

            $user = $this->select($sql)[0];

            //Cechk if the password from the form matches password from db
            if( password_verify($_POST['password'], $user['password']) ){

                $_SESSION['user_logged_in'] = $user['id'];

            }else{ //Login attempt failed.
                $_SESSION['login_attempt_msg'] = '<p class="text-danger"><strong>WRONG USERNAME OR PASSWORD</strong></p>';
            }

        }


        function edit(){

        $id = (int)$_SESSION['user_logged_in'];
        $username = trim($this->data['username']);
        $password = password_hash(trim($this->data['password']), PASSWORD_DEFAULT);

        $email = trim($this->data['email']);

        $profilePic_query = '';

        if( !empty($_FILES['profilePic']['name']) ){ // file was submitted
            $util = new Util;
            $profilePic = $util->file_upload(APP_ROOT."/views/assets/files/", "profilePic");
            $profilePic_query = ", profilePic = '$profilePic'";
        }


        $description = trim($this->data['description']);

        if( !empty(trim($_POST['password'])) ){ // New password entered

            $sql = "UPDATE users SET username='$username', password = '$password', email = '$email', description = '$description' $profilePic_query WHERE id = '$id'";

        }else{ //No new PASSWORD

            $sql = "UPDATE users SET username='$username', email = '$email', description = '$description' $profilePic_query WHERE id = '$id'";

        }


        $this->execute($sql);

    }

}

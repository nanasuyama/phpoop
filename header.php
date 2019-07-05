<?php
    //check login
    require_once "classes/User.php";
    //create instance
    $user = new User;
    //login required
    session_start();
    if($_SESSION['user_id']){
        echo "<script>window.location.replace('login.php');</script?";
    }
    $user_is = $_SESSION['user_id'];
    //get the information of the current Logged in user
    $get_current_user = $user->selectOne($user_id);

?>
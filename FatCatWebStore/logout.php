<?php
include './src/application.php';
//session remove
//$_SESSION ['username']         = "";
//$_SESSION ["is_user_loged_in"] = false;
session_destroy();

//



redirect('index.php');
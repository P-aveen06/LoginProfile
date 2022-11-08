<?php
require "function.php";
if (!empty($_POST['data_type'])) 
{
    $info['errors'] = [];
    $info['success'] = false;
    $arr = [];
    $arr['email'] = $_POST['email'];

    $row = db_query("select * from users where email =:email limit 1", $arr);

    if ($_POST['data_type'] == "login") 
    {
        if (!empty($row)) {
            $row = $row[0]; //array of array

            // check the password
            if (password_verify($_POST['password'], $row['password'])) {
                // password verified
                $info['success'] = true;
                $_SESSION['PROFILE']=$row;
            } else {
                $info['errors']['email'] = "Wrong email or Password";
            }
        } else {
            $info['errors']['email'] = "Wrong email or Password";
        }
    }
    echo json_encode($info);
}

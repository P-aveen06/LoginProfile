<?php
require "function.php";
if (!empty($_POST['data_type'])) {
    $info['data_type'] = $_POST['data_type'];
    $info['errors'] = [];
    $info['success'] = false;
    // validating form

    if ($_POST['data_type'] == "signup") 
    {
        // firstName 
        if (empty($_POST['firstName'])) {
            $info['errors']['firstName'] = "A firstname is required";
        } else if (!preg_match("/^[\p{L}]+$/", $_POST['firstName'])) {
            $info['errors']['firstName'] = "FirstName con't have special characters ,spaces and numbers";
        }

        // lastName
        if (empty($_POST['lastName'])) {
            $info['errors']['lastName'] = "A lastName is required";
        } else if (!preg_match("/^[\p{L}]+$/", $_POST['lastName'])) {
            $info['errors']['lastName'] = "lastName con't have special characters ,spaces and numbers";
        }

        // email
        if (empty($_POST['email'])) {
            $info['errors']['email'] = "A email is required";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $info['errors']['email'] = "Email is not valid";
        }

        // password
        if (empty($_POST['password'])) {
            $info['errors']['password'] = "A password is required";
        } else if (strlen($_POST['password']) < 8) {
            $info['errors']['password'] = "Password should be atleast 8 characters";
        }
        // confirmPassword
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $info['errors']['confirmPassword'] = "Password is not matched";
        }

        // phoneNumber
        if (strlen($_POST['phoneNumber']) < 10) {
            $info['errors']['phoneNumber'] = "Phone Number is not valid";
        }

        // gender
        $gender = ["Male", "Female", "Trans"];
        if (empty($_POST['gender'])) {
            $info['errors']['gender'] = "A gender is required";
        } else if (!in_array($_POST['gender'], $gender)) {
            $info['errors']['gender'] = "Gender not valid";
        }


        if (empty($info['errors'])) {
            // database query
            $arr = [];
            $arr['firstName'] = $_POST['firstName'];
            $arr['lastName'] = $_POST['lastName'];
            $arr['email'] = $_POST['email'];
            $arr['gender'] = $_POST['gender'];
            $arr['phoneNumber'] = $_POST['phoneNumber'];
            $arr['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT );
            $arr['date'] = date("y-m-d H:i:s");
            db_query("insert into users(firstName,lastName,email,gender,password,phoneNumber,date) values(:firstName,:lastName,:email,:gender,:password,:phoneNumber,:date)", $arr);
            $info['success'] = true;
        }
    }
    echo json_encode($info);
}

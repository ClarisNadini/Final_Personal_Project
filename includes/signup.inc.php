<?php

/**
 *this class get the input from the user frontend
 *Also calls all the other classes
 *Redirects to home page when signed up
 */

include '../classes/signupControl.classes.php';

if (isset($_POST["Usersubmit"])) {
    //Grabbing the data from the user
    $username = $_POST['username'];
    $email = $_POST['email'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $passwordcon = $_POST['passwordcon'];

    echo $username;

    //Instantiate SignupContr class

    // include "../classes/signupControl.classes.php";
    $signup = new SignUpContr($username, $email, $blood_group, $contact, $password, $passwordcon);


    //Running error handlers and user signup
    $signup->validateInput();

    //Moving to home page
    header("location:../LogIn/logIn.php?error=none");
};

<?php
/**
 *this class get the input from the user frontend
 *Also calls all the other classes
 *Redirects to home page when suggesuflly signed up
 */

 $email;

if(isset($_POST["submitL"])){
    //Grabbing the data from the user
    
    $email=$_POST['email'];

    $password=$_POST['password'];
   
    echo $username;

    //Instantiate SignupContr class

    include "../classes/loginControl.classes.php";
     $login= new LoginContr($email,$password);

    //Running error handlers and user signup

     $login->LoginUser();

    //Moving to main page
    header("location:../Main/mainPage.php?error=none");
}


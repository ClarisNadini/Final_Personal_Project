<?php
session_start();
$insurance_name;
if (isset($_POST["add"])) {
    //Grabbing the data from the user
    $insurance_name = $_POST["insurance_name"];
    $insurance_number = $_POST['insurance_number'];



    //Instantiate SignupContr class

    include "../insurance/insuranceControl.php";
    $signup = new insuranceControl($insurance_name, $insurance_number);


    //Running error handlers and user signup
    $signup->insertInsurance();

    //Moving to home page
    header("location:../Main/insurance.php?error=none");
};

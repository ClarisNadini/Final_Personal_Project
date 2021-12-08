<?php
session_start();
$date;
if (isset($_POST["submit"])) {
    //Grabbing the data from the user
    $hospital_name = $_POST['hospital_name'];
    $hospital_address = $_POST['hospital_address'];
    $hospital_contact = $_POST['hospital_contact'];


    //Instantiate SignupContr hospital

    include "../hospital/hospitalControl.php";
    $signup = new hospitalControl($hospital_name, $hospital_address, $hospital_contact);


    //Running error handlers and user signup
    $signup->insertHospital();

    //Moving to home page
    header("location:../Main/hospital.php?error=none");
};

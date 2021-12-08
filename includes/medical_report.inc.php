<?php
session_start(); 
$age;
if(isset($_POST["submit"])){
    //Grabbing the data from the user
    $age=$_POST["age"];
    $past_diseases=$_POST['past_diseases'];

   
    //Instantiate SignupContr class

    include "../medical_report/medical_reportControl.php";
     $todo= new medical_reportControl($age,$past_diseases);


    //Running error handlers and user signup
    $todo->medical_reportInsert();

    function storeAge(){
        return $age= $_POST['age'];
       };

    function storePast_diseases(){
        return $past_diseases=$_POST['past_diseases'];
    };


    //Moving to home page
    header("location:../Main/medical_report.php?error=none");
};


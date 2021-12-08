<?php
/* 
This class connects to the database by extending the database class.
Enables the insert functionality in the database.
*/
include '../classes/db.php';
class CreateInsurance extends database{
    private $dbconnect;

    //Initialize the database class
    function __construct()
    {
        $dbconnect= new database();
        $this->dbconnect= $dbconnect;
    }

    //Enable the insert functionality by running the insert query with parameters given
    function InsuranceCreate($insurance_name,$insurance_number){
        $connection= $this->dbconnect->connect();

        $stmt= $connection->prepare('INSERT INTO insurance(insurance_name,insurance_number) VALUES (?,?)');

        $insuranceArray=array($insurance_name,$insurance_number);

        //checks if the query statements doesnot execute
        if(!$stmt->execute($insuranceArray)){
            $stmt=null;

            //Redirects and show the error in the url
            header('location: ../Main/insurance.php?error=stmtfailed');
            exit();
    }
    
    $stmt=null;
    }
}

<?php
/* 
This class connects to the database by extending the database class.
Enables the insert functionality in the database.
*/
include '../classes/db.php';
class CreateMedical_report extends database {
    private $dbconnect;

    //Initialize the database class
    function __construct()
    {
        $dbconnect= new database();
        $this->dbconnect= $dbconnect;
    }

    //Enable the insert functionality by running the insert query with parameters given
    function InsertMedical_report($age,$past_diseases){
        $connection= $this->dbconnect->connect();

        $stmt= $connection->prepare('INSERT INTO medical_report(age,past_diseases) VALUES (?,?)');

        $medical_reportArray=array($age,$past_diseases);

        //checks if the query statements doesnot execute
        if(!$stmt->execute($medical_reportArray)){
            $stmt=null;

            //Redirects and show the error in the url
            header('location: ../Main/medical_report.php?error=stmtfailed');
            exit();
    }
    
    $stmt=null;
    }
}

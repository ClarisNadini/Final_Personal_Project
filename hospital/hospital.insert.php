<?php
/* 
This class connects to the database by extending the database class.
Enables the insert functionality in the database.
*/
include '../classes/db.php';
class CreateHospital extends database
{
    private $dbconnect;

    //intialize the database connection
    function __construct()
    {
        $dbconnect = new database();
        $this->dbconnect = $dbconnect;
    }


    //Enable the insert functionality by running the insert query with parameters given
    function HospitalCreate($hospital_name, $hospital_address, $hospital_contact)
    {
        $connection = $this->dbconnect->connect();

        $stmt = $connection->prepare('INSERT INTO hospital(hospital_name,hospital_address,hospital_contact) VALUES (?,?,?)');

        $classArray = array($hospital_name, $hospital_address, $hospital_contact);

        //checks if the query statements doesnot execute
        if (!$stmt->execute($classArray)) {
            $stmt = null;

            //Redirects and show the error in the url
            header('location: ../Main/hospital.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }
}

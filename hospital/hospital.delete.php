<?php

use classDelete as GlobalClassDelete;

include '../classes/db.php';
/* 
This class connects to the databases.
Enables the delete function on the database

*/
class hospitalDelete extends database
{
    private $dbconnect;

    //Initialize the database class
    function __construct()
    {
        $dbconnect = new database();
        $this->dbconnect = $dbconnect;
    }

    //this function connects to the database with a function from the extended class
    function deleteHospital()
    {
        $connection = $this->dbconnect->connect();

        $id = $_POST['id'] ?? null;

        if (!$id) {
            header('Location: ../Main/mainPage.php');
            exit;
        }


        //runs the delete query
        $statement = $connection->prepare('DELETE FROM hospital WHERE id=:id');

        //this binds the id from the database to the variable @$id
        $statement->bindValue(':id', $id);

        //executes the query
        $statement->execute();

        //redirects to the hospital when the process is over
        header('Location:../Main/hospital.php');
    }
}
$test = new hospitalDelete();
$test->deleteHospital();

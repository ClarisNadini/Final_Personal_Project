<?php
include '../classes/db.php';
/* 
This class connects to the databases.
Enaables the delete function on the database

*/
class insuranceUpdate extends database
{
    private $dbconnect;


    //Intialize the database connection
    function __construct()
    {
        $dbconnect = new database();
        $this->dbconnect = $dbconnect;
    }

    //deletes form the database
    function deleteInsurance()
    {
        $connection = $this->dbconnect->connect();

        $id = $_POST['id'] ?? null;

        if (!$id) {
            header('Location: ../Main/insurance.php');
            exit;
        }
        //runs the delete query
        $statement = $connection->prepare('DELETE FROM insurance WHERE id=:id');

        //this binds the id from the database to the variable @$id
        $statement->bindValue(':id', $id);

        //executes the query
        $statement->execute();
        //redirects to the insurance page when the process is over
        header('Location: ../Main/insurance.php');
    }
}
$test= new insuranceUpdate();
$test->deleteInsurance();
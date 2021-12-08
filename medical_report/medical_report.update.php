<?php

include '../classes/db.php';
/* 
Connects to the database
Enables the update function
*/
class medical_reportUpdate extends database
{
  private $dbconnect;


  //initialize the database connection
  function __construct()
  {
    $dbconnect = new database();
    $this->dbconnect = $dbconnect;
  }

  //fetch the data from the database as an array
  function selectMedical_report()
  {
    //calls the connect function from the database class
    $connection = $this->dbconnect->connect();

    //holds the id of each post
    $id = $_GET['id'] ?? null;

    //If the id does not exist then exit the program 
    if (!$id) {
      header('Location:../Main/medical_report.php');
      exit;;
    }

    //run the insert query
    $stmt = $connection->prepare('SELECT * FROM medical_report WHERE id=:id');

    //assign the id from the database to the variable id
    $stmt->bindvalue(':id', $id);
    $stmt->execute();

    //fetch the all the data from the databse as an array
    $medical_report = $stmt->fetch(PDO::FETCH_ASSOC);

    //created an array to hold the errors if they occur
    $error = [];

    //Assigning the values in the array gotten form the database
    $age = $medical_report['age'];
    $past_diseases = $medical_report['past_diseases'];


    //Validation for the update

    //check if the button submitting is a post function
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $age = $_POST['age'];
      $past_diseases = $_POST['past_diseases'];

      //this makes sure the name field is not empty
      if (!$age) {
        $error[] = 'Name is required';
      }

      //Checks if there are no errors 
      //if there are no errors then run the query statements
      //then bind the values to the variables

      if (empty($error)) {
        $stmt = $connection->prepare("UPDATE medical_report SET age=:age,past_diseases=:past_diseases WHERE id=:id");
        $stmt->bindValue(':age', $age);
        $stmt->bindValue(':past_diseases', $past_diseases);
        $stmt->bindValue(':id', $id);

        //executes the query statement
        $stmt->execute();

        //redirects to the MeetingView
        header('Location:../Main/medical_report.php');
      }
    }

    //return the array of values gotten from the database
    return $medical_report;
  }
}

$test = new medical_reportUpdate();
$test->selectMedical_report();
?>

<!-- 
    Example of the front end implementation
 -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href="app.cs">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Medical Report</title>
</head>

<body>


  <div class="container border p-5 mt-5" style="justify-content: center; width:500px; background-color: #3985b6;">
    <h3>Update Medical Report</h3>

    <!-- Check if the error array is empty-->
    <?php if (!empty($errors)) : ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $error) : ?>
          <div><?php echo $error ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data" style="background-color: #3985b6;">


      <!-- Display the  values -->
      <div class="mb-3">
        <label>Age</label>
        <input type="text" name="age" class="form-control" value="<?php
                                                                  $test = new medical_reportUpdate();
                                                                  $value =  $test->selectMedical_report();
                                                                  echo $value['age'] ?>">
      </div>

      <div class="mb-3">
        <label>Past Diseases</label>
        <input type="text" name="past_diseases" class="form-control" value="<?php $test = new medical_reportUpdate();
                                                                            $value =  $test->selectMedical_report();
                                                                            echo $value['past_diseases'] ?> ">
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

  </table>
</body>

</html>
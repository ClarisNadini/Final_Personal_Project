<!--Displaying the data-->
<?php
require("../classes/db.php");

$dbconnect = new database();
$connection = $dbconnect->connect();

$stmt = $connection->prepare("SELECT * FROM hospital ");

$stmt->execute();
$classes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="MainPage.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn").click(function() {
                $("#myModal").modal('show');
            });
        });
    </script>
    <style>
        <?php include 'mainPage.css'; ?>
    </style>
    <title>Class Page</title>
</head>

<body>

    <div class="row">
        <!-- Body of the Page -->

        <div class="col-sm mb-3">
            <div class="card">
                <div class="card-body p-4 rounded-bottom">

                    <nav class="my-3 mx-3">
                        <h1 class="d-flex justify-content-center"><b>Hospital</b></h1>
                    </nav>


                    <!--MODAL START -->
                    <div id="myModal" class="modal fade" tabindex=" -1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Hospital Information</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">

                                    <form action="../includes/hospital.inc.php" method="POST">
                                        <div class="form-group mb-3">
                                            <label>Hospital Name</label>
                                            <input type="text" name="hospital_name" class="form-control">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Hospital Address</label>
                                            <input type="text" name="hospital_address" class="form-control">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Hospital Contact</label>
                                            <textarea type="text" name="hospital_contact" class="form-control"></textarea>
                                        </div>



                                        <button type="submit" class="btn btn-primary" name="submit"> Submit</button>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--MODAL END -->

                    <!--Subjects inputs-->
                    <!--Modal Button trigger-->
                    <button type="button" style="background-color: #3985b6; color:black;" class="btn btn-lg btn-primary pop_button px-5 border-0"> Hospital Information <img src="Pictures/add.png" alt="Add" id="icons"></button>

                    <?php
                    foreach ($classes as $i => $class) : ?>

                        <div class="card-body rounded-bottom">
                            <div class=" row sections inputbody py-3" style="background-color: #3985b6;">
                                <div class=" col-3">
                                    <div class="card rounded-bottom">
                                        <div class="col-12 sections">
                                            Hospital Name
                                            <div class="d-flex justify-content-left">

                                                <?php
                                                echo $class['hospital_name']
                                                ?>
                                            </div>
                                            <small style="color: red"></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-3">
                                    <div class="card rounded-bottom">
                                        <div class="col-12 sections">
                                            Hospital Address
                                            <div class="d-flex justify-content-left">

                                                <?php
                                                echo $class['hospital_address']
                                                ?>
                                            </div>
                                            <small style="color: red"></small>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-3">
                                    <div class="card rounded-bottom">
                                        <div class="col-12 sections">
                                            Hospital Contact
                                            <div class="d-flex justify-content-left">

                                                <?php echo $class['hospital_contact'] ?>

                                            </div>
                                            <small style="color: red"></small>
                                        </div>
                                    </div>
                                </div>

                                <!--Delete and edit buttons-->
                                <div class="col-3 pt-3">
                                    <td>
                                        <a href='../hospital/hospital.update.php? id=<?php echo $class['id'] ?>' class="btn btn-sm btn-outline-primary border-dark border-2"><span style="color: purple;">Edit</span></a>

                                        <form style="display:inline-block" method="POST" action="../hospital/hospital.delete.php">
                                            <input type="hidden" name='id' value="<?php echo $class['id'] ?>">
                                            <button href='../hospital/hospital.delete.php?id=' <?php echo $class['id'] ?> class="btn  btn-sm btn-outline-danger border-dark border-2">Delete</button>
                                        </form>
                                    </td>
                                </div>

                            </div>

                        </div>


                    <?php endforeach; ?>




                    <!--Ending part-->
                </div>
            </div>

            <a href="mainPage.php">
                <h5> <img src="Pictures/backward.png" alt="back" id="icons" style="margin-left: 100px;">Back</h5>
            </a>

        </div>



    </div>




</body>

</html>
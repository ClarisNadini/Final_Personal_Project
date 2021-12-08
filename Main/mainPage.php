<!--Displaying the data-->
<?php
require("../classes/db.php");

$dbconnect = new database();
$connection = $dbconnect->connect();

$stmt = $connection->prepare("SELECT username, email, blood_group, contact FROM user ");

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
    <!-- <link rel="stylesheet" href="mainPage.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".btn").click(function() {
                $("#myModal").modal('show');
            });
        });
    </script>
    <script type="application/javascript">
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(myImage);
        });
    </script>

    <style>
        <?php include 'mainPage.css'; ?>
    </style>

    <title>Main Page</title>
</head>


<body>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-10 col-10">
            <div class="card">
                <div class="card-body p-0 rounded-bottom">

                    <!--Vertical navigation bqr to show the users details-->
                    <nav>
                        <div class="align-items-start">
                            <div class="nav navA flex-column nav-pills rounded-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                <form style="margin-left: 15%;" class="p-3">
                                    <input type="file" name="profile" accept="image/x-png,image/gif,image/jpeg" class="py-5" id="profile" />
                                </form>

                                <br>

                                <div>
                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">

                                        <a href="../Index/index.php" class="p-3"> <img src="Pictures/backward.png" alt="back" id="icons"> <b>Back</b></a>

                                        <br><br><br>

                                        <a href="hospital.php" class="p-3"><img src="Pictures/hospital.png" alt="hospital" id="icons"><b>Update Hospital</b></a>

                                        <br><br><br>

                                        <a href="insurance.php" class="p-3"><img src="Pictures/insurance.png" alt="insurance" id="icons"><b>Update Insurance</b></a>

                                        <br><br><br>

                                        <a href="medical_report.php" class="p-3"><img src="Pictures/health-report.png" alt="report" id="icons"><b>Update Medical Report</b></a>

                                        <br><br><br>

                                    </button>
                                </div>

                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>

        <!-- Body of the Page -->

        <div class="mb-3 col-lg-9 col-md-8 col-sm-12 col-12">
            <div class="card">
                <div class="card-body cardB p-4 rounded-bottom">

                    <nav class="my-3 mx-3">
                        <h1 class="d-flex justify-content-center"><b>Find Your Match</b></h1>
                    </nav>

                    <div class="card-body rounded-bottom">
                        <div class=" row sections inputbody py-3">
                            <div class="col-12">
                                <div class="card-flex rounded-bottom">

                                    <br>

                                    <!--Show the different users details on a table-->
                                    <div class="table-responsive">
                                        <table class="table align-middle" style="line-height: 20px;">

                                            <tr colspan="12">
                                                <h3>User's Records</h3>
                                            </tr>

                                            <thead>
                                                <t>
                                                    <th scope="col" class="border border-info border-2 px-5 py-2">User Name</th>
                                                    <th scope="col" class="border border-info border-2 px-5 py-2">Email</th>
                                                    <th scope="col" class="border border-info border-2 px-5 py-2">Blood Group</th>
                                                    <th scope="col" class="border border-info border-2 px-5 py-2">Contact</th>
                                                </t>
                                            </thead>

                                            <?php
                                            foreach ($classes as $i => $rows) {
                                            ?>
                                                <tbody>
                                                    <tr class="card-body col-sm mb-3">
                                                        <td scope="row" class="border border-info border-2 px-5 py-2 "> <?php echo $rows['username'] ?> </td>
                                                        <td scope="row" class="border border-info border-2 px-5 py-2 "> <?php echo $rows['email'] ?> </td>
                                                        <td scope="row" class="border border-info border-2 px-5 py-2 "> <?php echo $rows['blood_group'] ?> </td>
                                                        <td scope="row" class="border border-info border-2 px-5 py-2 "> <?php echo $rows['contact'] ?> </td>
                                                    </tr>
                                                </tbody>
                                            <?php
                                            }
                                            ?>

                                        </table>

                                    </div>

                                    <br>


                                </div>

                            </div>
                        </div>

                        <!--Ending part-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




</body>

</html>
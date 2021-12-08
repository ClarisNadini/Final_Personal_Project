<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css" />
    <title>Donor/Patient Landing Page</title>
    <style>
        <?php include 'index.css'; ?>
    </style>
</head>

<body>
    <div class="container major-cont pt-3 my-5">
        <div class="card border-success border-white">
            <nav class="card-header bg-transparent border-success">
                <ul class="nav justify-content-end">
                    <li style="margin-right: 60%;">
                        <p><img src="Pictures/love.png" alt="logo" id="logo"> <b><em> We Care </em></b></p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../LogIn/logIn.php">LogIn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../SignUp/signUp.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQs.php">FAQ</a>
                    </li>
                </ul>
            </nav>

            <div class="card-body text-success">
                <div class="card-text">
                    <div class="px-1">
                        <div class="row gx-5">
                            <div class="col">
                                <div>
                                    <p style="color: blue;"><em>Matching with your blood type</em></p>
                                    <h1 class="ps-3">Worry No More</h1>
                                    <p class="ps-5">
                                        We want to make sure that every patient in need of blood donation has access to natural and effective health care through merging the gap between patients and donors.
                                    </p>
                                    <button class="rounded-pill border border-dark border-2" type="submit" id="submitBtn"><em>Join the Family</em></button>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <img src="Pictures/love.png" alt="hand" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--Footer-->
            <div class="card-footer bg-transparent border-success footer mb-5">
                <footer>
                    <div class="row">
                        <div class="column">
                        </div>

                    </div>
                    <div class="row">



                        <div class="row">
                            <div class="column pt-3">
                                <h3 id="Heading1"><b>Connect with us on our Social Media Platforms</b></h3>
                                <p>
                                    <a href="https://www.facebook.com/claris.nadini/" target="_blank"><img id="image" src="Pictures/facbook.jfif" /></a>
                                    <a href="https://twitter.com/ClarisNadini" target="_blank"><img id="image" src="Pictures/twitter.jfif" /></a>
                                    <a href="https://www.youtube.com/watch?v=jNdWDJqxSOE" target="_blank"><img id="image" src="Pictures/youtube.jfif" /></a>
                                    <a href="https://www.linkedin.com/in/claris-oyunga/" target="_blank"><img id="image" src="Pictures/linkden.png" /></a>
                                    <br>
                                    <a href="https://www.instagram.com/kenyan.daughter/" target="_blank"><img id="image" src="Pictures/instagram.jfif" /></a>
                                    <a href="https://medium.com/@kenyandaughter" target="_blank"><img id="image" src="Pictures/medium.jfif" /></a>
                                </p>


                            </div>

                            <div class="column pt-3">
                                <p id="Heading1"><b>Postal Address</b></p>
                                <p id="subheading">Nairobi,<br />Kenya.</p>
                                <p id="Heading1"><strong>Phone & Email</strong></p>
                                <p id="subheading">
                                    (T)+254 719 158 922 <br />
                                    (E)claris.nadini@ashesi.edu.gh
                                </p>

                            </div>


                        </div>

                        <div class="row">
                            <div class="column1">
                                <p id="subheading1">
                                    <a id="subheading">All Rights reserved
                                    </a>
                                </p>

                            </div>
                        </div>
                </footer>


            </div>
        </div>
    </div>
</body>

</html>
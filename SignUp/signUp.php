<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="signUp.css"> -->
    <style>
        <?php include 'signUp.css'; ?>
    </style>
    <title>Sign Up Page</title>
</head>


<body>

    <!--Sign up inputs-->
    <div class="container">

        <form id="form" class="form" action="../includes/signup.inc.php" method="POST" onsubmit="return validateForm(event)">
            <h3 class="my-1 fs-1">Join The Family</h3>

            <div class="form-control border-0">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" />
                <small id='usernameError'></small>
            </div>

            <div class="form-control border-0">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" />
                <small id='emailError'></small>
            </div>

            <div class="form-control border-0">
                <label for="blood_group">Blood Group</label>
                <select name="blood_group" id="blood_group" class="select">
                    <option value="A"></option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
                <small id='blood_groupError'></small>
            </div>


            <div class="form-control border-0">
                <label for="contact">Contact</label>
                <input type="text" id="contact" name="contact" />
                <small id='contactError'></small>
            </div>

            <div class="form-control border-0">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />
                <small id='passwordError'></small>
            </div>

            <div class="form-control border-0">
                <label for="password2">Confirm Password</label>
                <input type="password" id="password2" name="passwordcon" />
                <small id='password2Error'></small>
            </div>

            <small id='success'></small>
            <button type="submit" id='submit' name="Usersubmit">Sign Up</button>

            <p style="font-size: 10px; margin-left: 25%;">
                <span style="filter:brightness(200%)">Already have an account? </span><a href="../LogIn/logIn.php"><em><b>Login here</b></em>
            </p>
            <br>

        </form>
    </div>

    <!--Connecting to javascript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        <?php require_once("signUp.js"); ?>
    </script>
    <!-- <script src="signUp.js"></script> -->
</body>

</html>
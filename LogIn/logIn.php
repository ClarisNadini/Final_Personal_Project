<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="logIn.css"> -->
    <style>
        <?php include 'logIn.css'; ?>
    </style>
    <title>Log In Page</title>
</head>

<body>
    <div class="container">
        <form id="form" class="form" action="../includes/login.inc.php" method="POST" onsubmit="return validateForm(event)">
            <h3 class="my-3 fs-2">The Care Family</h3>
            <br>
            <div class="form-control border-0">
                <label for="email" name="email">Email</label>
                <input type="email" id="email" name="email" />
            </div>
            <small id='emailError'></small>

            <br>

            <div class="form-control border-0">
                <label for="password" name="password">Password</label>
                <input type="password" id="password" name="password" />
            </div>
            <small id='passwordError'></small>
            <br>

            <div>
                <small id='success'></small>
                <button type="submit" id="submit" name="submitL">Welcome Back</button>
            </div>
            <br>
            <p style="font-size: 10px; margin-left: 25%;"> <span>Do not have an account?</span><a href="../SignUp/signUp.php"><em><b> Sign up here</b></em></p>

            <br>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        <?php require_once("logIn.js"); ?>
    </script>
</body>

</html>
<?php
// It instantiate the variables taken form the forntend and run some controls on them
/*
 * First extend the signup classs
 * instantiate it 
 * create the variable we would accept form in to the database from the  frontend
 * run controls on the inputs
 */

include "signup.classes.php";

class SignUpContr extends SignUp
{
    private $username;
    private $email;
    private $blood_group;
    private $contact;
    private $password;
    private $passwordcon;

    //instantiate the variables
    function __construct($username, $email, $blood_group, $contact, $password, $passwordcon)
    {
        $this->username = $username;
        $this->email = $email;
        $this->blood_group = $blood_group;
        $this->contact = $contact;
        $this->password = $password;
        $this->passwordcon = $passwordcon;
    }

    //Validation for input
    public  function emptyinput()
    {
        $result = '';
        if (empty($this->username) || empty($this->email) || empty($this->blood_group) || empty($this->contact) || empty($this->password) || empty($this->passwordcon)) {
            return $result = false;
        } else {
            return $result = true;
        }
        return $result;
    }


    //Validation for the password
    function invalidpassword()
    {
        $result = '';
        $uppercase = preg_match('@[A-Z]@', $this->password);
        $lowercase = preg_match('@[a-z]@', $this->password);
        $number    = preg_match('@[0-9]@', $this->password);
        $specialChars = preg_match('@[^\!#$%&*]@', $this->password);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($this->password) < 8) {
            return $result = false;
        } else {
            return $result = true;
        }
        return $result;
    }


    //Validation for the email
    function invalidemail()
    {
        $result = '';
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return $result = false;
        } else {
            return $result = true;
        }
        return $result;
    }

    //Validation for the password if the two password inputed are equal
    function comparePassword()
    {
        $result = '';
        if ($this->password !== $this->passwordcon) {
            return $result = false;
        } else {
            return $result = true;
        }
        return $result;
    }
    //Checks if the user exists by checking if the email they put already exist in the database
    function Usercheck()
    {
        $result = '';
        $userObj = new SignUp();
        if (!$userObj->checkUser($this->email)) {
            return $result = false;
        } else {
            return $result = true;
        }
        return $result;
    }


    //Checks all the validation function
    //If no errors  then it signs up the user
    public function validateInput()
    {
        if ($this->emptyinput() == false) {
            header('location: ../SignUp/signUp.php?error=emptyinput');
            exit();
        }
        if ($this->invalidpassword() == false) {
            header('location: ../SignUp/signUp.php?error=invalidpassword');
        }
        if ($this->comparePassword() == false) {
            header('location: ../SignUp/signUp.php?error=checkpassword');
            exit();
        }
        if ($this->invalidemail() == false) {
            header('location: ../SignUp/signUp.php?error=invalidemail');
            exit();
        }
        if ($this->UserCheck() == false) {
            header('location: ../LogIn/logIn.php?error=userexist');
        }
        $inputUser = new SignUp();
        $inputUser->setUser($this->username, $this->email, $this->blood_group, $this->contact, $this->password);
    }
}
//$test = new SignUpContr('ss', 'o@gmail.com', 'ss', 'ss', 'S1111o@2', 'S1111o@2');
//$test->validateInput();

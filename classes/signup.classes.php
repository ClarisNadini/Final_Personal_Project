 <?php
    /**
     * This class connects to the database and insert the new user into the database
     */
    include "db.php";
    class SignUp extends database
    {
        // Insert into the database  the new user
        private $dbconnect;
        function __construct()
        {
            $dbconnect = new database();
            $this->dbconnect = $dbconnect;
        }

        public function setUser($username, $email, $blood_group, $contact, $password)
        {
            $connection = $this->dbconnect->connect();
            $stmt = $connection->prepare('INSERT INTO user (username,email,blood_group,contact,password) VALUES (?,?,?,?,?);');

            $option = [
                'cost' => 12,
            ];

            $hashed = password_hash($password, PASSWORD_BCRYPT, $option);
            echo $hashed;

            $dbarray = array($username, $email, $blood_group, $contact, $hashed);

            if (!$stmt->execute($dbarray)) {
                $stmt = null;
                header('location: ../SignUp/signUp.php?error=stmtfailed');
                exit();
            }

            $stmt = null;
        }

        //check of the user email already exists in the database
        protected function checkUser($email)
        {

            $connection = $this->dbconnect->connect();
            $result = '';
            $stmt = $connection->prepare('SELECT username FROM user WHERE email=?;');

            if (!$stmt->execute(array($email))) {
                $stmt = null;
                header('location: ../SignUp/signUp.php?error=stmtfailed');
                exit();
            }
            if ($stmt->rowCount() > 0) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        //stores the email of the user 
        protected function storeEmail()
        {
            return $this->email;
        }
    }

<?php
include "hospital.insert.php";
/* 
This class does the validation of the 
*/
class hospitalControl extends CreateHospital
{
    // Parameters that would be accepted
    private $hospital_name;
    private $hospital_address;
    private $hospital_contact;
    private $setHospital;
    //instantiate the variables
    function __construct($hospital_name, $hospital_address, $hospital_contact)
    {
        $this->hospital_name = $hospital_name;
        $this->hospital_address = $hospital_address;
        $this->hospital_contact = $hospital_contact;
        $setHospital = new CreateHospital();
        $this->setHospital = $setHospital;
    }

    // check if the Name input is empty
    function emptyInput()
    {
        $result = '';

        if (empty($this->hospital_name)) {
            return $result = false;
        } else {
            return $result = true;
        }

        return $result;
    }



    //runs the method for inserting in to the database from the extended class
    function insertHospital()
    {
        if ($this->emptyInput() == false) {
            header(('location: ../Main/mainPage.php?error=empty Name field'));
            exit();
        }
        $this->setHospital->HospitalCreate($this->hospital_name, $this->hospital_address, $this->hospital_contact);
    }
}

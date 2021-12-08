<?php
/* 
This class checks for the validation of inputs
*/
include "insurance.insert.php";
class insuranceControl extends CreateInsurance
{
    // Parameters that would be accepted
    private $insurance_name;
    private $insurance_number;
    private $setInsurance;

    //instantiate the variables 
    function __construct($insurance_name, $insurance_number)
    {
        $this->insurance_name = $insurance_name;
        $this->insurance_number = $insurance_number;
        $setInsurance = new CreateInsurance();
        $this->setInsurance = $setInsurance;
    }

    // check if the Name input is empty
    function emptyInput()
    {
        $result = '';

        if (empty($this->insurance_name)) {
            return $result = false;
        } else {
            return $result = true;
        }

        return $result;
    }


    //runs the functions that insert into the meeting table if no errors
    function insertInsurance()
    {
        if ($this->emptyInput() == false) {
            header(('location: ../Main/insurance.php?error=empty Name field'));
            exit();
        }
        $this->setInsurance->insuranceCreate($this->insurance_name, $this->insurance_number);
    }
}

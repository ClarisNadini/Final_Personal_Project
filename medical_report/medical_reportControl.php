<?php
/* 
This class checks for the validation of inputs
*/
include "medical_report.insert.php";
class medical_reportControl extends CreateMedical_report
{
    // Parameters that would be accepted
    private $age;
    private $past_diseases;
    private $setMedical_report;
    //instantiate the variables
    function __construct($age, $past_diseases)
    {
        $this->age = $age;
        $this->past_diseases = $past_diseases;
        $setMedical_report = new CreateMedical_report();
        $this->setMedical_report = $setMedical_report;
    }

    // checks if the Name input is empty
    function emptyInput()
    {
        $result = '';

        if (empty($this->age)) {
            return $result = false;
        } else {
            return $result = true;
        }

        return $result;
    }

    //runs the functions that insert into the metime table if no errors
    function medical_reportInsert()
    {
        if ($this->emptyInput() == false) {
            header('location: ../medical_report.php?error=empty Name field');
            exit();
        }
        $this->setMedical_report->InsertMedical_report($this->age, $this->past_diseases);
    }
}


<?php

class student{
    public $age = 2;
    public $name = "Gil Jeremy";

    function get_name(){
        return $this->name;
    }
}

$gil = new student;

echo $gil->get_name();

?>
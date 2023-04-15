<?php
class Perimeter{
    public $length = 0;
    public $breadth = 0;
    public function __construct($length, $breadth){
        $this -> length = $length;
        $this -> breadth = $breadth;
    }

    public function calculate_perimeter(){
        $perimeter = ($this -> length * 2) + ($this -> breadth * 2); 
        echo $perimeter;
    }
}
?>
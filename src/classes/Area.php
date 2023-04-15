<?php
class Area{
    public $length;
    public $breadth;

    public function __construct($length, $breadth){
        $this -> length = $length;
        $this -> breadth = $breadth;
    }

    public function calculate_area(){
        $area = $this -> length * $this -> breadth;
        echo $area;
    }
}
?>
<?php
class Volume{
    public $length;
    public $breadth;
    public $height;

    public function __construct($length, $breadth, $height){
        $this -> length = $length;
        $this -> breadth = $breadth;
        $this -> height = $height;
    }

    public function calculate_volume(){
        $volume = $this -> length * $this -> breadth * $this -> height;
        echo $volume;
    }
}
?>
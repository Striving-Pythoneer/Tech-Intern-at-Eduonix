<?php
class Car{
    private $make; //not accessible to ordinary users
    private $model;
    private $color;

    #CONSTRUCTOR SHOULD BE 1ST METHOD
    public function __construct($make, $model, $color) {
        #echo 'Car Created <br/>';
        $this -> make = $make;
        $this -> model = $model;
        $this -> color = $color;
    }

    public function getColor() {
        return $this -> color.'<br/>';
    }


    public function start() {
        echo 'Car Starting..........!<br/>';
    }

}
    /*
    public function setMake($make){
        # set property of private attributes
        $this -> make = $make;
    }

    public function getMake() {
        return $this -> make;
    }
}
*/
?>
<?php
echo "Hello OOP";

class Student {
    //property
    public $name;

    //method
    public function get_name() {
        return $this->name;
    }

    public function set_name( $name ) {
        return $this->name = $name;
    }
}


?>
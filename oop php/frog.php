<?php
require_once('animal.php');

class frog extends animal {
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 4;
    }

    public function jump() {
        return " jump : hop hop";
    }
}
?>

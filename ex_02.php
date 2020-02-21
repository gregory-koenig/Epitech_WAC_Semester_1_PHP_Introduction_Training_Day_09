<?php
class MyAttribute {
    private $attribute;

    public function __construct($attribute) {
        $this->attribute = $attribute;
    }

    public function display() {
        echo $this->attribute . "\n";
    }
}
?>
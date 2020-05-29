<?php
    class CoffeeEntity {

        public $id;
        public $name;
        public $es;
        public $us;
        public $ro;
        public $image;
        public $link;

        function __construct($id, $name, $type, $price, $roast, $country, $image, $review) {
            $this->id = $id;
            $this->name = $name;
            $this->type = $es;
            $this->price = $us;
            $this->roast = $ro;
            $this->country = $image;
            $this->image = $link;
        } // function __construct($id, $name, $type, $price, $roast, $country, $image, $review) {

    } // class CoffeeEntity {
?>
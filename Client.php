<?php
require 'User.php';
class Client extends User {
    private $city;
    private $state;
    private $country;

    public function __construct($name, $surname, $username, $city, $state, $country) {
        parent::__construct($name, $surname, $username);
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function setLocation($city, $state, $country) {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function getLocation() {
        return "$this->city, $this->state, $this->country";
    }

    public function location() {
        return $this->getLocation();
    }
}

?>

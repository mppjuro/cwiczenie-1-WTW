<?php

class User {
    public $name;
    public $surname;
    public $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public function fullName() {
        $adminTag = $this->is_admin ? " (admin)" : "";
        return $this->name . " " . $this->surname . $adminTag;
    }
}

?>

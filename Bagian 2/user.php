<?php
class User {
    private $name;
    private $email;
    private $nim;

    public function __construct($name, $email, $nim) {
        $this->name = $name;
        $this->email = $email;
        $this->nim = $nim;
    }

    public function displayInfo() {
        echo "<p>User Information:</p>";
        echo "<p>Name: $this->name</p>";
        echo "<p>Email: $this->email</p>";
        echo "<p>NIM: $this->nim</p>";
    }
}

// Penggunaan objek pada halaman web
$userObj = new User("Andreas Pascalis", "andreaspt01.com", "121140017");
$userObj->displayInfo();
?>

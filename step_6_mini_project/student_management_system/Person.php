
<?php
class Person {
    protected $name;
    protected $email;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
    }
    public function getEmail() {
        return $this->email;
    }

    public function showBasicInfo() {
        echo "👤 name: $this->name<br>";
        echo "📧 email: $this->email<br>";
    }
}
?>

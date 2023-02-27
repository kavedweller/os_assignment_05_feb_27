<?php

class Person
{
    private $name, $email;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}


if(isset($_POST['submit']))
{
    //create a new person object
    $person = new Person();

    // set person name and email from _POST superglobal variable
    $person->setName($_POST['name']);
    $person->setEmail($_POST['email']);

//    Display information using getName() and getEmail() methods
    echo "<h2>Person Information:</h2>";
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br>";
}
?>

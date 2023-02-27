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

//create a new person object
$person = new Person();

// set person name and email
$person->setName("John Doe");
$person->setEmail("john@doe.org");
?>

<!--Task-2: get person name and email and display in browser-->
<!doctype html>
<html lang="en">
<head>
    <title>testing</title>
</head>
<body>
<span><?php echo "Name: ".$person->getName()."<br/>"; ?></span>
<span><?php echo "Email: ".$person->getEmail()."<br/>"; ?></span>
</body>
</html>

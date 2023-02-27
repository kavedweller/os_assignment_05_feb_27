<?php
require_once 'person.php';

if (isset($_POST['submit']))
{
//create a new person object
    $person = new Person();

// set person name and email from _POST superglobal variable
    $person->setName($_POST['name']);
    $person->setEmail($_POST['email']);
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Assignment 5 - view data</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css">
    </head>
    <body>


    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <h2>Person Information:</h2>
                <!--  Display information using getName() and getEmail() methods    -->
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $person->getName(); ?></td>
                        <td><?php echo $person->getEmail(); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>

    </body>
    </html>
    <?php
}
?>
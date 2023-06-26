<!DOCTYPE html>
<html>

<head>
    <title>Sample Form</title>
    <!-- Before inline styles -->
    <!-- <link rel="stylesheet" type="text/css" href="Sample.css"> -->
</head>

<body>
</body>

</html>

<?php

require 'Form.php';
require 'TextInput.php';

$form = new Form();

$form->addInput(new TextInput("firstname", "First Name", "Bruce"));
$form->addInput(new TextInput("lastname", "Last Name", "Wayne"));


if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    // get action param
    if ($form->validate()) {
        $firstName = $form->getValue("firstname");
        $lastName = $form->getValue("lastname");
        echo $firstName . " " . $lastName;
    } else {
        $form->display(); // pass action as param here
    }
} else {
    $form->display();
}

?>
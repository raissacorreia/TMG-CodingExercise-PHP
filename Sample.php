<?php

require_once 'Form.php';
require_once 'TextInput.php';

$example_array = [1, 2, 3];
array_push($example_array, 4);
// print the whole array
print_r($example_array);

$form = new Form();

$form->addInput(new TextInput("firstname", "First Name", "Bruce"));
$form->addInput(new TextInput("lastname", "Last Name", "Wayne"));

if ($_SERVER['METHOD'] == "POST") {
    if ($form->validate()) {
        // display user info
        $firstName = $form->getValue("firstname");
        $lastName = $form->getValue("lastname");
        echo $firstName . " " . $lastName;
    } else {
        $form->display();
    }
} else {
    $form->display();
}

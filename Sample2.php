<!DOCTYPE html>
<html>

<head>
  <title>Sample Form</title>
  <style>
    .form-container {
      margin: 10rem;
      /* do not rewrite */
      background-color: #f2f2f2;
      /* this property don't exist originally so I can add it */
    }
  </style>
</head>

<body>
</body>

</html>

<?php

require './TMG-CodingExercise-PHP/Form.php';
require './TMG-CodingExercise-PHP/TextInput.php';

$form = new Form();

$form->addInput(new TextInput("firstname", "First Name", "Bruce"));
$form->addInput(new TextInput("lastname", "Last Name", "Wayne"));


if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
  if ($form->validate()) {
    $firstName = $form->getValue("firstname");
    $lastName = $form->getValue("lastname");
    echo $firstName . " " . $lastName;
  } else {
    $form->display();
  }
} else {
  $form->display();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Sample Form</title>
    <style>
        .form-container {
            /* do not rewrite, this property already exists in CSS inline for form-container */
            margin: 10rem;
            /* this property don't exist originally so I can add it as a consumer of the component lib */
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php

    require 'Form.php';
    require 'TextInput.php';

    $form = new Form();

    $form->addInput(new TextInput("firstname", "First Name", "Bruce"));
    $form->addInput(new TextInput("lastname", "Last Name", "Wayne"));

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
        if ($form->validate()) {
            $firstName = $form->getValue("firstname");
            $lastName = $form->getValue("lastname");
            echo '<p>' . $firstName . " " . $lastName . '<p>';
        } else {
            $form->display();
            echo '<p>Invalid Data on Input, both fields are required to be filled with in</p>';
        }
    }

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET") {
        $form->display();
    }
    ?>
</body>

</html>
# TMG Coding Challenge PHP

## What was done

- For styling, I used inline css so the components that be reused elsewhere like a lib of components. This causes an issue that the "style" tag in not on the head of the document, but in the middle of the body, however it is a necessary trade off for the sake of reusability.
- In Sample.php on style tag I added a customization on top of that one that works that change the color to a light gray that show that you can use each element class to customize it, if the css prop was not set already on the already existent code.
- I also added the code to always verify the existence of something before using it, to avoid server crashing errors, such as:

  Sample.php

  ```php
  isset($_SERVER['REQUEST_METHOD'])
  ```

- Other items that was also done are further explained by the comments above the methods.

## What was not done and why

- Validation on form fields. What is harmful or undesired as prompt depends on the context and the quality of the API that is receiving such data, therefore the validation is just that both fields need to be filled.
- If the fields are not filled in, a message will appear on the bottom of the form.
- Only the stubbed methods: As specified on instructions "create a TextInput.php class in addition to filling out the stubbed methods for the library", because the idea was to fill the TODOs I didn't add more classes to have a more complete form template, and sticked to the basics. As a consequence the only OOP principle that was applicable was class abstraction

## Running

At the project folder I run the following command:

```sh
php -S localhost:8000 -f Sample.php
```

For simple and quick debug, specially in the beginning:

```sh
php Sample.php
```

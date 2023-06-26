# Thing that were done and why

- For styling, I used simple css files separated for better readability and maintenance. They're imported on the HTML code
   that is echoed by each PHP function.
- I always verified the existence of something before using it, to avoid server crashing errors, the biggest ones are:

Sample.php

```php
isset($_SERVER['REQUEST_METHOD'])
```

Form.php

```php
$file = 'Sample.php'; if (file_exists($file)) {
```

- Other items that was also done are further explained by the comments above the methods.

# Things that were NOT done and why

- Validation on form fields. What is harmful or undesired as prompt depends on the context and the quality of the API that is receiving such data, therefore the validation is just that both fields need to be filled.
- Only the stubbed methods: As specified on instructions "create a TextInput.php class in addition to filling out the stubbed methods for the library", because the idea was to fill the TODOs I didn't add more classes to have a more complete form template, and sticked to the basics. As a consequence the only OOP principle that was applicable was class abstraction

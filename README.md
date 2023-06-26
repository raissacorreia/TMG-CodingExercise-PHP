# Thing that were done and why

- For styling, I used inline css so the components that be reused elsewhere like a lib of components. I also did the css file and its imported is commented because it's easier and more legible to code like that to debug and then copying to the inline version.
- I also added the code to always verify the existence of something before using it, to avoid server crashing errors, such as:

Sample.php

```php
isset($_SERVER['REQUEST_METHOD'])
```

- Other items that was also done are further explained by the comments above the methods.

# Things that were NOT done and why

- Validation on form fields. What is harmful or undesired as prompt depends on the context and the quality of the API that is receiving such data, therefore the validation is just that both fields need to be filled.
- Only the stubbed methods: As specified on instructions "create a TextInput.php class in addition to filling out the stubbed methods for the library", because the idea was to fill the TODOs I didn't add more classes to have a more complete form template, and sticked to the basics. As a consequence the only OOP principle that was applicable was class abstraction

# Running

at the project folder I run the following command:
php -S localhost:8000 -f Sample.php

at another folder created a Sample2 to test the css customization on the component consumer:
php -S localhost:8001 -f Sample2.php

or to just simple and quick debug, specially in the beginning:
php Sample.php
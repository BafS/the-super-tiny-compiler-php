<a href="super-tiny-compiler.php"><img width="731" alt="THE SUPER TINY COMPILER" src="https://cloud.githubusercontent.com/assets/952783/14171276/ed7bf716-f6e6-11e5-96df-80a031c2769d.png"/></a>

***Welcome to The Super Tiny Compiler! (PHP version)***

**Disclamer** This is a port from Javascript to PHP of this project:  [thejameskyle/the-super-tiny-compiler](https://github.com/thejameskyle/the-super-tiny-compiler).

This is an ultra-simplified example of all the major pieces of a modern compiler
written in easy to read PHP.

Reading through the guided code will help you learn about how *most* compilers
work from end to end.

### [Want to jump into the code? Click here](super-tiny-compiler.php)

To run the code:
```php
<?php
require 'super-tiny-compiler.php';

try {
  echo compiler('(add (subtract 4 2) 2)') . "\n";
} catch (Exception $e) {
  echo $e->getMessage() . "\n";
}
```

---

[![cc-by-4.0](https://licensebuttons.net/l/by/4.0/80x15.png)](http://creativecommons.org/licenses/by/4.0/)

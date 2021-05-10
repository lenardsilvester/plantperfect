# plantperfect.

Plantperfect is my first big project. I made this project to put me to the test.
I tried to make a website that has all the functions a e-commerce website has.

## A list of things that i need to fix.

- [x] Better mobile support (proper image scaling and proper text scaling).
- [x] Better security.

## Database connection.

dbh.inc.php

``` php
$serverName = "";
$dBUsername = "";
$dBPassword = "";
$dBName = "";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
```

## Visit the website.

[plantperfect](https://lenardsilvester.nl/plantperfect/)

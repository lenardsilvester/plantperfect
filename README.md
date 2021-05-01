# plantperfect.

plantperfect is a project to put me to the test. I tried to make a website that has all the functions a E-Commerce website has.
I also tried to challenge myself with the styling.

## A list of things that i need to fix.

- Mobile support for images. (Proper scaling.)
- Better security.

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

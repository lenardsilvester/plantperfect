## plantperfect

### dbh.inc.php

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

https://drawsql.app/lenardsilvester/diagrams/plantperfect-1/embed

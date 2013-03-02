<html>
<?php

$username="root";
$password="";
$database="tracker";

mysql_connect("localhost", $username, $password);
@mysql_select_db($database) or die ("Unable to select database!");
?>
</html>
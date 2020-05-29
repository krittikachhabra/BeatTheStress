<?php

require_once 'config.php';

$data = $con->query("SELECT * FROM RegisteredStudents")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    echo $row['SID']."<br />\n";
 ?>


<!DOCTYPE html>
<html class="no-js">
<body>
<table border="1" style="width:100%">
<tr>
<th>
SID
</th>
<th>
Name
</th>
<th>
E-mail
</th>
<th>
Mobile
</th>
</tr>
<?php
foreach ($data as $row) {
	"<tr>"
	"<td>"
    echo $row['SID']."<br />\n";
	"</td>"
	"<td>"
    echo $row['Name']."<br />\n";
	"</td>"
	"<td>"
    echo $row['Email']."<br />\n";
	"</td>"
	"<td>"
    echo $row['Mobile']."<br />\n";
	"</td>"
	"</tr>"
?>
</table>
</body>
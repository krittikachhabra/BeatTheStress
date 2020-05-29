<?php

require_once 'config.php';
require_once 'class.user.php';
$testId = $_POST["testId"];
$data = $con->query("SELECT * FROM RegisteredStudents where SID not in (SELECT username from Busari_Responses where response_id='$testId')")->fetchAll();
$reg_user = new USER();
if(isset($_POST['notify']))
{
    foreach ($data as $row) {
    $message = "     
      Hello,
      <br /><br />
      We noticed that you haven't completed your stress assessment.<br/>
      Please do so at your earliest. <br/>
      <br /><br />
      Thanks! :)</a>
      <br /><br />
      Have a Nice Day!";
      
   $subject = "Pending Assessment";
      
   $reg_user->send_mail($row['Email'],$message,$subject); 
}
header("Location: notify.php");
}

 ?>


<!DOCTYPE html>
<html class="no-js">
<body>
    
    <form method="POST">
    <h1>Students who haven't completed the assessment:</h1>
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
    ?>
	<tr>
	<td>
	    <?php
    echo $row['SID'];
    ?>
	</td>
	<td>
	    <?php
    echo $row['Name'];
    ?>
	</td>
	<td>
	    <?php
    echo $row['Email'];
    ?>
	</td>
	<td>
	    <?php
    echo $row['Mobile'];
    ?>
	</td>
	</tr>
	<?php
}
?>
</table>
  <button name="notify" type="submit" value="notify">Send Mail</button>
</form>
</body>
</html>

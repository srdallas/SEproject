<html>

<body>





<?php

$con = mysql_connect("localhost","root","","demo2");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }



mysql_select_db("demo", $con);



$sql="INSERT INTO nametable2 (name, email, cidate, codate, guest, children, bed, breakfast, message)

VALUES

('$_POST[name]','$_POST[email]','$_POST[cidate]','$_POST[codate]','$_POST[guest]','$_POST[children]','$_POST[bed]','$_POST[breakfast]','$_POST[message]')";



if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "Thank you for booking with us you will recieve a email confirmation";



mysql_close($con)

?>

</body>

</html>

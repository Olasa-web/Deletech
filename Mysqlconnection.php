<?php
$connection=mysqli_connect("localhost","root","Delewa1780","votingsysytem");
if(!$connection)
die("could not connect".mysqli_connect_error());
else
echo 'connection established';

?>
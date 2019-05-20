<body>
<?php

$name=$_POST['t1'];
$userid=$_POST['t2'];
$password=$_POST['t3'];
$gender=$_POST['r1'];
$email=$_POST['t4'];
$address=$_POST['t5'];
$mobile=$_POST['t6'];
$qualification=$_POST['c1'];
$collagename=$_POST['t7'];
$resumelink=$_POST['t8'];
mysql_connect("localhost","root","") or die("Connection Failed");


mysql_select_db("jobportal") or die("Database Not found");

$q1="insert into applicants values('$userid','$name','$password','$gender','$email','$address','$mobile','$qualification','$collagename','
$resumelink')";



$result=mysql_query($q1);

if(mysql_affected_rows()>0)
{
echo "<h2>Successfully registered</h2>";
}
else
{
echo "<h2>Didn't register successfully</h2>";
}

?>
</body>
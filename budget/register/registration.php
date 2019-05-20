<body>
<?php

$name=$_POST['name'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$dob=$_POST['date'];
mysql_connect("localhost","root","") or die("Connection Failed");


mysql_select_db("budgetdb") or die("Database Not found");

$q1="insert into users values('$name','$gender','$dob','$mobile','$email','$password')";



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
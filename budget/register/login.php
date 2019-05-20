<html>
<body>
<?php

$uid=$_POST['email'];
$pass=$_POST['password'];

//Connecting to the Database
mysql_connect("localhost","root","") or die("Connection Failed");

//Selecting the database
mysql_select_db("budgetdb") or die("Database Not found");

//Select Command
$q1="select * from users where email='$uid'";
$q2="select * from users where Password='$pass'";

//Running the Query
$u1=mysql_query($q1);
$u2=mysql_query($q2);

$row1=mysql_fetch_array($u1);
$row2=mysql_fetch_array($u2);

if($row1["email"]==$uid && $row2["Password"]==$pass)
  {
header("Location:http://localhost/project/budget/calculator/");
}
else
{
  if($row1["email"]!=$uid)
    {
echo "wrong password";
 }
  else
    {
echo "wrong password";
 }
}

?>
</body>
</html>
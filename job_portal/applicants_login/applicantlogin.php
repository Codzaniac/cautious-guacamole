<html>
<body>
<?php
//Data from the form
$uid=$_POST['t1'];
$pass=$_POST['t2'];

//Connecting to the Database
mysql_connect("localhost","root","") or die("Connection Failed");

//Selecting the database
mysql_select_db("jobportal") or die("Database Not found");

//Select Command
$q1="select * from applicants where applicant_id='$uid'";
$q2="select * from applicants where applicant_password='$pass'";

//Running the Query
$u1=mysql_query($q1);
$u2=mysql_query($q2);

$row1=mysql_fetch_array($u1);
$row2=mysql_fetch_array($u2);

if($row1["applicant_id"]==$uid && $row2["applicant_password"]==$pass)
  {
header("Location: http://localhost/job_portal/applicants_login/applicants_homepage.php");
}
else
{
  if($row1["applicant_id"]!=$uid)
    {
header("Location:http://localhost/job_portal/applicants_login/applicantlogin.html");
 }
  else
    {
header("Location:http://localhost/job_portal/applicants_login/applicantlogin.html");
 }
}

?>
</body>
</html>
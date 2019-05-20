<body>
<?php
$uid=$_POST['t1'];
$pass=$_POST['t2'];


mysql_connect("localhost","root","") or die("Connection Failed");

mysql_select_db("jobportal") or die("Database Not found");


$q1="select * from recruiters where recruiter_id='$uid'";
$q2="select * from recruiters where recruiter_password='$pass'";


$u1=mysql_query($q1);
$u2=mysql_query($q2);

$row1=mysql_fetch_array($u1);
$row2=mysql_fetch_array($u2);

if($row1["recruiter_id"]==$uid && $row2["recruiter_password"]==$pass)
{
header("Location: http://localhost/job_portal/recruiter_login/recruiter_homepage.html");
}
else
{
  if($row1["recruiter_id"]!=$uid)
  {
    echo "<h2>Invalid applicantsid</h2>";
  }
  else
  {
    echo "<h2>Invalid Password</h2>"; 
  }
}

?>
</body>

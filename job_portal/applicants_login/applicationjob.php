<html>
<head>
<style type='text/css'>
a
{
text-decoration:none;
}
table.table1
{
width:100%;
}
table.table1 td
{
height:auto;
width:auto;
padding:5px;
font-size:28px;
text-decoration:none;
text-align:center;
border:3px solid black;
}
table.table1 td:hover
{
height:auto;
width:auto;
font-size:30px;
text-decoration:none;
text-align:center;
border:3px solid red;
background-color:yellow;
}
</style>

</head>

<body>
<form name='f1' method='POST' action=''>
<center><img src="gitam-logo.png" height=200px width=600px ></img></center>
<table class="table1">
<tr>
<td><a href="http://localhost/job_portal/applicants_login/applicants_homepage.php">Home</a></td>
<td><a href="http://localhost/job_portal/applicants_login/viewjobs.php">view jobs</a></td>
<td><a href="http://localhost/job_portal/applicants_login/applicationjob.html">Apply</a></td>
<td><a href="http://localhost/job_portal/applicants_login/checkjobstatus.php">check job status</a></td>
<td><a href="http://localhost/job_portal/applicants_login/myinformation.php">My information</a></td>
<td><a href="http://localhost/job_portal/welcome/">Logout</a></td>
</tr>

<?php
$jid=$_POST['t1'];
$aid=$_POST['t2'];


mysql_connect("localhost","root","") or die("Connection Failed");


mysql_select_db("jobportal") or die("Database Not found");

$q1="insert into jobapplication values('$jid','$aid')";

$result=mysql_query($q1);

if(mysql_affected_rows()>0)
{
echo "<h2>Successfully applied</h2>";
}
else
{
echo "<h2>Didn't register successfully</h2>";
}
?>
</table>
</form>
</body>
</html>
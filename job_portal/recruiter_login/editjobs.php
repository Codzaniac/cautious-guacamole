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
<center><img src="gitam-logo.png" height=200px width=600px ></img></center>
<table class="table1">
<tr>
<td><a href="http://localhost/job_portal/recruiter_login/recruiter_homepage.html">Home</a></td>
<td><a href="http://localhost/job_portal/jobs_editing/jobs_editing.html">Add jobs</a></td>
<td><a href="http://localhost/job_portal/recruiter_login/managejobs.php">Manage jobs</a></td>
<td><a href="http://localhost/job_portal/recruiter_login/editjobs.html">Edit Jobs</a></td>
<td><a href="http://localhost/job_portal/recruiter_login/deletejobs.html">Delete Jobs</a></td>
<td><a href="http://localhost/job_portal/recruiter_login/receivedapplications.php">Received Applications</a></td>
<td><a href="http://localhost/job_portal/recruiter_login/changestatus.html">Change Status</a></td>
<td><a href="http://localhost/job_portal/welcome/">Logout</a></td>
</tr>
</table>


<?php
$jid=$_POST['t1'];
$col=$_POST['s1'];
$up=$_POST['t2'];

mysql_connect("localhost","root","") or die("Connection Failed");

mysql_select_db("jobportal") or die("Database Not found");


$q1="update jobs set $col='$up'  where job_id='$jid'";
$result=mysql_query($q1);
if(mysql_affected_rows()>0)
{
header("location: http://localhost/job_portal/recruiter_login/editjobs.html");
}
else
{
echo "<h2>Didn't register successfully</h2>";
}

?>
</body>
</html>
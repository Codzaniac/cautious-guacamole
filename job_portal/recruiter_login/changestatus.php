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

table.table2
{
width:auto;
height:auto;
font-size:28px;
border:3px dotted black;
}
table.table2 td
{
height:auto;
width:auto;
text-align:justify;
font-size:28px;
border:1px solid black;
}
table.table2
{
width:auto;
height:auto;
font-size:28px;
border:3px dotted black;
}
table.table2 td
{
word-spacing:1px;
height:auto;
width:auto;
text-align:left;
font-size:28px;
border:1px solid black;
}
table.table2 th
{
height:auto;
width:auto;
text-align:left;
font-size:30px;
border:3px solid black;
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

</tr>
<?php
$aid=$_POST['t1'];
$jid=$_POST['t2'];
$stat=$_POST['s1'];

mysql_connect("localhost","root","") or die("Connection Failed");

mysql_select_db("jobportal") or die("Database Not found");


$q1="insert into applicationstatus values('$aid','$jid','$stat')";
$result=mysql_query($q1);
if(mysql_affected_rows()>0)
{
echo "<h2>Successfully added</h2>";
}
else
{
echo "<h2>Didn't register successfully</h2>";
}

?>
</form>
</body>
</html>
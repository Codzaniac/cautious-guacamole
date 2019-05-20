<html>
<head>
<style type='text/css'>
a
{
text-decoration:none;
}
a:hover
{
text-decoration:none;
color:red;
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
<table class="table2" align=center>
<th>Job ID</th>
<th>Job Position</th>
<th>Job Title</th>
<th>Working hrs/day</th>
<th>Work Experience</th>
<th>Job City</th>
<th>Job Description</th>
<th>Job Salary</th>



<?php
$conn=mysqli_connect("localhost","root","","jobportal");
if($conn-> connect_error){
die("Connection failed:".$conn-> connect_error);
                         }
$sql= "select * from jobs";
$result= $conn-> query($sql);

if($result-> num_rows > 0){
 while($row =$result->fetch_assoc()){
echo "<tr><td>". $row['job_id']
."</td><td>". $row['job_position']
."</td><td>". $row['job_title']
."</td><td>". $row['job_workhrs']
."</td><td>". $row['job_workexp']
."</td><td>". $row['job_city']
."</td><td>". $row['job_description']
."</td><td>". $row['job_salary'];
}
echo"</table>";
}
else
{
echo "0 result";
}

 $conn-> close();
?>
</table>
</form>
</body>
</html>
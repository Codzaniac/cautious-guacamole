<html>
<head>
<style type='text/css'>
a
{
text-decoration:none;
color:black;
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
<td><a href="http://localhost/job_portal/applicants_login/applicants_homepage.php">Home</a></td>
<td><a href="http://localhost/job_portal/applicants_login/viewjobs.php">view jobs</a></td>
<td><a href="http://localhost/job_portal/applicants_login/applicationjob.html">Apply</a></td>
<td><a href="http://localhost/job_portal/applicants_login/checkjobstatus.php">check job status</a></td>
<td><a href="http://localhost/job_portal/applicants_login/myinformation.php">My information</a></td>
<td><a href="http://localhost/job_portal/welcome/">Logout</a></td>
</tr>
</table>

<table class="table2" align=center>

<th>Applicant ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Resume Link</th>


<?php
$conn=mysqli_connect("localhost","root","","jobportal");
if($conn-> connect_error){
die("Connection failed:".$conn-> connect_error);
                         }
$sql= "select applicant_id,applicant_name,applicant_email,applicant_mobile,applicants_resumelink from applicants";
$result= $conn-> query($sql);

if($result-> num_rows > 0){
 while($row =$result->fetch_assoc()){
  echo "<tr><td>". $row['applicant_id']. "</td><td>". $row['applicant_name']. "</td><td>". $row['applicant_email']. "</td><td>". $row['applicant_mobile']. "</td><td>". $row['applicants_resumelink']."</td></tr>";
}
echo"</table>";
}
else
{
echo "0 result";
}

 $conn-> close();
?>
</body>
</html>
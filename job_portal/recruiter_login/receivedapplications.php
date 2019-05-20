<html>
<head>
<style type='text/css'>
a
{
text-decoration:none;
color: white;
}
a:hover 
{
  color: black;
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
border:0px solid black;
background-color: #981E29;
}
table.table1 td:hover
{
height:auto;
width:auto;
font-size:30px;
text-decoration:none;
text-align:center;
border:0px solid red;
background-color:white;

}

table.table2 
{
border:0px solid black;
font-size:28px;
color:white;
background-color: #981E29;
}
table.table2 td
{
border:0px solid black;
font-size:28px;
color:white;
background-color: #981E29;
}
table.table2 input
{
height:auto;
font-size:auto;
width:auto;
}
body {
  
  background-image: url("background.png");
  background-repeat: no-repeat;
  background-position: bottom center;
  margin-bottom: 310px;
  background-attachment: fixed;
  
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

<table class="table2" align=center>
<th>Applicant ID</th>
<th>Applicant Full Name</th>
<th>Job ID</th>
<th>Applicant Email</th>
<th>Applicant Mobile</th>
<th>Applicant Qualification</th>
<th>Applicants Resume Link</th>



<?php
$conn=mysqli_connect("localhost","root","","jobportal");
if($conn-> connect_error){
die("Connection failed:".$conn-> connect_error);
                         }
$sql= "select a.applicant_id,a.applicant_name,j.job_id,a.applicant_email,a.applicant_mobile,a.applicant_qualification,a.applicants_resumelink from applicants a,jobapplication j where j.applicant_id=a.applicant_id";
$result= $conn-> query($sql);

if($result-> num_rows > 0){
 while($row =$result->fetch_assoc()){
echo "<tr><td>".$row['applicant_id']
."</td><td>". $row['applicant_name']
."</td><td>". $row['job_id']
."</td><td>". $row['applicant_email']
."</td><td>". $row['applicant_mobile']
."</td><td>". $row['applicant_qualification']
."</td><td>". $row['applicants_resumelink'];
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
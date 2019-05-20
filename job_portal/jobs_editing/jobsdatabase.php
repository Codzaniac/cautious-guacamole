<body>
<?php

$jobid=$_POST['t1'];
$jobposition=$_POST['t2'];
$jobtitle=$_POST['t3'];
$workhrs=$_POST['t4'];
$workexp=$_POST['t5'];
$jobcity=$_POST['t6'];
$jobdesc=$_POST['t7'];
$salary=$_POST['t8'];

mysql_connect("localhost","root","") or die("Connection Failed");


mysql_select_db("jobportal") or die("Database Not found");

$q1="insert into jobs values('$jobid','$jobposition','$jobtitle','$workhrs','$workexp','$jobcity','$jobdesc','$salary')";



$result=mysql_query($q1);

if(mysql_affected_rows()>0)
{
header("Location: http://localhost/job_portal/jobs_editing/jobs_editing.html");
}
else
{
header("Location: http://localhost/job_portal/jobs_editing/jobs_editing.html");
}
?>
</body>
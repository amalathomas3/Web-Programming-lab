<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			font-size: 15px;
		}
		table{
			font-size: 20px;
		}
	</style>
</head>
<body>

</body>
</html>
<?php
$cc=mysqli_connect("localhost","root","","library12");
if($cc->connect_error)
{
	echo"connection failed";
}
else
{
	if(isset($_POST['s1']))
	{
		$a=($_POST['Book_id']);
		$b=($_POST['Book_name']);
		$c=($_POST['Author']);
		$d=($_POST['Publications']);
		$e=($_POST['issue_date']);
		$f=($_POST['due_date']);

     $q="INSERT INTO lib12 values('$a','$b','$c','$d','$e','$f');";
     if($cc->query($q))
     {
     	echo"details saved";

     }
     else
     {
     	echo"invalid entry";
     }
	}
	if(isset($_POST['s2']))
	{
		$sum=0;
		$sql="SELECT Book_id,Book_name,due_date from lib12";
		$result=$cc->query($sql);
		echo"<center><br><br><br>";
		echo"<table border='1'><caption>LIST OF ENTRIES</caption><tr>
		<td>Book ID</td>
		<td>Book Name</td>
		<td>Due date</td></tr>";
		while($row=$result->fetch_assoc())
		{
			echo"<tr><td>".$row['Book_id']."</td><td>".$row['Book_name']."</td><td>".$row['due_date']."</td></tr>";
			
		}
		
		echo"</table>";
		echo"</center>";
		?>
				<?php

	}
}

$cc->close();
?>
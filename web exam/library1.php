<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
{
	echo"connection unsuccessful";
}
else
{
	$d="CREATE DATABASE library12";
	if($cc->query($d)==true)
	{
		$cc=mysqli_connect("localhost","root","","emp");
	}
	$s="CREATE TABLE lib12(Book_id int PRIMARY KEY,Book_name varchar(25) not null,Author varchar(25),Publications varchar(25),issue_date date,due_date date)";
	if($cc->query($s))
	{
		echo"table created";
	}

}
$cc->close();
?>
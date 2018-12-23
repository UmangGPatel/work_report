<?php

define("servername", "localhost");
define("username", "root");
define("password", "");
define("dbname", "report_db");
function insertReport($start_date,$end_date,$report,$name)
	{	
		 $connection= mysqli_connect(servername,username,password,dbname);
		 
		$start_date="\"".$start_date ."\" ";
		$end_date="\"".$end_date ."\" ";
		$report="\"".$report ."\" ";
		$name="\"".$name ."\" ";
		if(!$connection){
		 die ("connection error:");
		}
		// Check connection
	    $query = "INSERT INTO report_data (name,start_date,end_date,report) VALUES ($name,$start_date,$end_date,$report)";
		mysqli_query($connection, $query);
		mysqli_close($connection);
		
	}	
if(isset($_POST['start_date'])&&isset($_POST['end_date'])&&isset($_POST['report'])&&isset($_POST['name']))
	{
		insertReport($_POST['start_date'],$_POST['end_date'],$_POST['report'],$_POST['name']);

	}

?>
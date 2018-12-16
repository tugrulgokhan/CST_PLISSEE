<?php
  include('config.php');

  session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
  try
{
//Getting records (listAction)
		if($_GET["action"] == "list")
	{
		if(empty($_POST['date_filter'])) 
			{ 
				$date_filter = NULL;
					if(empty($_POST['user_filter'])) 
					{ 
						$user_filter = NULL; 
					} 
					else 
					{ 
						$user_filter = $_POST['user_filter']; 
					}
			} 
		else 
			{ 
				$date_filter = $_POST['date_filter'];
					if(empty($_POST['user_filter'])) 
					{ 
						$user_filter = NULL; 
					} 
					else 
					{ 
						$user_filter = $_POST['user_filter']; 
					}
			}

		//Get records from database

		$result = mysqli_query($db, "SELECT TRANSACTION_ID, POSTED_USER, DATE, AMOUNT, DONE, DELETED FROM TRN_TRANSACTION WHERE DELETED='UNDELETED' AND DONE='UNDONE' AND DATE LIKE '%".$date_filter."%' AND POSTED_USER LIKE '%".$user_filter."%';");
		//Add all records to an array
		$rows = array();
		while($row = mysqli_fetch_array($result))
		{
		    $rows[] = $row;
		}
		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}

	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		$result = mysqli_query($db,"INSERT INTO TRN_TRANSACTION(POSTED_USER, DATE, AMOUNT) VALUES('" . $_POST["POSTED_USER"] . "',now()," . $_POST["AMOUNT"] . ");");
		//Get last inserted record (to return to jTable)
		$result = mysqli_query($db,"SELECT * FROM TRN_TRANSACTION WHERE TRANSACTION_ID = LAST_INSERT_ID();");
		$row = mysqli_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{  	
		$result = mysqli_query($db, "UPDATE TRN_TRANSACTION SET DONE = '" . $_POST["DONE"] . "', POSTED_USER = '" . $_POST["POSTED_USER"] . "' WHERE TRANSACTION_ID = '" . $_POST["TRANSACTION_ID"] . "';");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysqli_query($db, "UPDATE TRN_TRANSACTION SET DELETED = 'DELETED' WHERE TRANSACTION_ID = " . $_POST["TRANSACTION_ID"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	
	//Close database connection
	mysqli_close($db);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR ";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>
<?php
 include('config.php');
try
{   
	//Getting records (listAction)
	if($_GET["action"] == "list")
	{

		$result = mysqli_query($db, "SELECT BASKET_ID,COLOR,HEIGHT,WIDTH,MATERIAL,MONTAGE,PRICE, DONE, DELETED  FROM TRN_BASKET WHERE DELETED='WIEDERHERGESTELLT' AND DONE='VERLASSEN' AND TRANSACTION_ID=".$_GET['transID'].";");
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
		$result = mysqli_query($db,"INSERT INTO TRN_BASKET(COLOR, HEIGHT, WIDTH, MATERIAL, MONTAGE, PRICE, TRANSACTION_ID) VALUES('" . $_POST["COLOR"] . "', " . $_POST["HEIGHT"] . "," . $_POST["WIDTH"] . "," . $_POST["MATERIAL"] . "," . $_POST["MONTAGE"] . "," . $_POST["PRICE"] . "," .$_GET['transID']. ");");
		//Get last inserted record (to return to jTable)
		$result = mysqli_query($db,"SELECT * FROM TRN_BASKET WHERE BASKET_ID = LAST_INSERT_ID();");
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
		//Update record in database
		$result = mysqli_query($db, "UPDATE TRN_BASKET SET DONE = '" . $_POST["DONE"] . "', COLOR = '" . $_POST["COLOR"] . "', HEIGHT = '" . $_POST["HEIGHT"] . "', WIDTH = '" . $_POST["WIDTH"] . "', MATERIAL = '" . $_POST["MATERIAL"] . "', PRICE = '" . $_POST["PRICE"] . "', MONTAGE = '" . $_POST["MONTAGE"] . "' WHERE BASKET_ID = '" . $_POST["BASKET_ID"] . "';");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysqli_query($db, "UPDATE TRN_BASKET SET DELETED = 'GESTRICHEN' WHERE BASKET_ID = " . $_POST["BASKET_ID"] . ";");

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
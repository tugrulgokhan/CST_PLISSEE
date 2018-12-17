<?php
include('config.php');
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
  <body background="/img/BG.jpg">
  	<form action="logout.php"><button type="submit" style="height:30px;width:120px"><b>LOG OUT</b></button></form>
  	<form style="color: black">
  		
  		<button type="submit" id="Filter_Button" style="height:30px; width:100px"><b>FILTER</b></button>
  		&emsp;
  		<b>NUTZER:</b><input type="text" name="user_filter" id="user_filter" style="height:30px;width:170px" />
  		<b>DATUM:</b><input type="text" name="date_filter" id="date_filter" style="height:30px;width:260px" />		
    </form>
  	
  	<div style="height: 5px" ></div>
	<div id="PeopleTableContainer" style="width: 900px;"></div>
	<script type="text/javascript">
 		
		$(document).ready(function () {
			

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Sales',
				paging: false,
            	sorting: false,
            	edit:false,
				openChildAsAccordion: true,
				actions: {
					listAction: 'DeletedActions.php?action=list',
					createAction: 'DeletedActions.php?action=create',
					updateAction: 'DeletedActions.php?action=update',
					deleteAction: 'DeletedActions.php?action=delete'
				},
				fields: {
						BASKETS:{
							title:'',
							width:'1%',
							paging: true,
            				sorting: false,
            				create:false,
            				edit: false,
							display: function (basket) {
                        	//Create an image that will be used to open child table
                       		 var $img = $('<img src="/img/basket.jpg" title="Show My Items" />');
                        	//Open child table when user clicks the image
                        	$img.click(function () {
                            	$('#PeopleTableContainer').jtable('openChildTable',$img.closest('tr'), //Parent row
                                    	{
                                    	title: basket.record.POSTED_USER + ' - Items',
                                    	actions: {
                                        	listAction: 'DeletedBasketActions.php?action=list&transID='+basket.record.TRANSACTION_ID,
                                        	deleteAction: 'DeletedBasketActions.php?action=delete',
                                        	updateAction: 'DeletedBasketActions.php?action=update',
                                        	createAction: 'DeletedBasketActions.php?action=create&transID='+basket.record.TRANSACTION_ID
                                    	},
										fields: {
                                        	BASKET_ID: {
                                        		title:'No',
                                        		width: '5%',
                                        		key: true,
												create: false,
												edit: false,
                                        	},
                                        	COLOR: {
                                        		title:'Farbe',
                                            	width: '10%'
                                        	},
                                        	HEIGHT: {
                                        		title:'Höhe',
                                            	width: '10%'
                                        	},
                                        	WIDTH: {
                                            	title: 'Breite',
                                            	width: '30%',
                                        	},
                                        	MATERIAL: {
                                            	title: 'Material',
                                            	width: '10%',
                                        	},
                                        	MONTAGE: {
                                            	title: 'Montage',
                                            	width: '30%',
                                        	},
                                        	PRICE: {
                                            	title: 'Preis',
                                            	width: '30%',
                                        	},
                                        	DONE: {
												title: 'Erledigt',
												width:'2%',
												options: ["UNDONE","DONE"],
												list:false,
												create:false,
												edit:false
												
											},
											DELETED: {
												title: 'Gelöscht',
												width:'2%',
												edit:false,
												list:false,
												create:false
											}
                                    	}
                                	}, function (data) { //opened handler
                                   		data.childTable.jtable('load');
                                });
                        	});
                        		//Return image to show on the person row
                        		return $img;
                    	}

					},

					TRANSACTION_ID: {
						title:'No',
						width:'5%',
						key: true,
						edit: false,
					},
					POSTED_USER: {
						title: 'Nutzer',
						width: '20%'
					},
					DATE: {
						title: 'Datum',
						width: '20%',
						edit:false,
						create :false
					},
					AMOUNT: {
						title: 'Menge',
						width: '5%',
						edit:false
					},
					DELETED:
					{
						title: 'Gelöscht',
						width:'2%',
						options: ["UNDELETED", "DELETED"],
						list:false,
						create:false

					}
				}
			});
			$('#date_filter').datepicker({ dateFormat: 'yy-mm-dd' }); // Add datepicker to filter input
        	$('#Filter_Button').click(function (e) {
        	e.preventDefault();
            	$('#PeopleTableContainer').jtable('load', {
                	date_filter: $('#date_filter').val(),
                	user_filter: $('#user_filter').val()
            	});
    		});
    		
    		$('#Filter_Button').click();

			//Load person list from server
			//$('#PeopleTableContainer').jtable('load');

		});

	</script>
			<div style="height: 5px">	</div>
			<button style="height:33px; width:150px" type="button" onclick="location.href='willtable.php';"><b>WILL</b></button>
			<button style="height:33px; width:150px" type="button" onclick="location.href='donetable.php';"><b>DONE</b></button>
  	</div>
  </body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: tcoksanli
 * Date: 2018-12-12
 * Time: 00:13
 */
  include('config.php');
try
{
    //Getting list of products
    if($_GET["action"] == "price")
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $height = $data['height'];
        $width = $data['width'];
        $pid = $data['pid'];
        $result = mysqli_query($db,
            "SELECT PRICE FROM PRC_PRICE WHERE HEIGHT = ".$height." AND WIDTH = ".$width." AND PID = ".$pid);
        //Add all records to an array
        $row = mysqli_fetch_row($result);
        $price = $row[0];

        if(!empty($price) && $price > 0){
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['Price'] = $price;
            print json_encode($jTableResult);
        }

        $error = 'Product not found error';
        throw new UnexpectedValueException($error);

    }
    //Insert List From Public User
    if($_GET["action"] == "insert")
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $orders = $data['orders'];
        $ebayun = $data['name'];
        $validOrders = array();
        if(empty($orders)){
            $error = 'Orders are null or empty';
            throw new UnexpectedValueException($error);
        }
        $count = 0;
        $totalPrice = 0;
        foreach($orders as $order){
            $result = mysqli_query($db, "SELECT PRICE FROM PRC_PRICE WHERE HEIGHT = ".$order['HEIGHT']." AND WIDTH = ".$order['WIDTH']." AND PID = ".$order['PID']);
            $row = mysqli_fetch_row($result);
            $price = $row[0];
            if(!empty($price) && $price > 0){
                $totalPrice = $totalPrice + $price;
                $validOrders[] = $order;
                $validOrders['PRICE'] = $price;
            }
        }
        if($totalPrice == 0){
            $error = 'Orders are null or empty or zero price';
            throw new UnexpectedValueException($error);
        }
        if(empty($validOrders)){
            $error = 'Orders are null or empty';
            throw new UnexpectedValueException($error);
        }

        $result = mysqli_query($db,"INSERT INTO TRN_TRANSACTION(POSTED_USER, DATE, AMOUNT) VALUES('" . $ebayun . "',now()," . $totalPrice . ");");
        //Get last inserted record (to return to jTable)
        $result = mysqli_query($db,"SELECT TRANSACTION_ID FROM TRN_TRANSACTION WHERE TRANSACTION_ID = LAST_INSERT_ID();");
        $row = mysqli_fetch_array($result);

        foreach($validOrders as $validOrder){
            $result = mysqli_query($db,"INSERT INTO TRN_BASKET(HEIGHT, WIDTH, PID, PRICE, TRANSACTION_ID) VALUES('" . $validOrder['HEIGHT'] . "','" . $validOrder['WIDTH'] . "','" .$validOrder['PID']."','" .$validOrder['PRICE']."','" .$row[0]."'" . ");");
        }

        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Records'] = $row;
        $jTableResult['TotalPrice'] = $totalPrice;
        print json_encode($jTableResult);
    }
    //Getting list of products
    if($_GET["action"] == "list")
    {
        $result = mysqli_query($db, "SELECT HEIGHT, WIDTH, PID, PRICE FROM PRC_PRICE");
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
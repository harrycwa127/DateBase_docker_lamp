<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <?php
    require_once '_helpers.php';

    $curd_dbhost    = 'db';
    $curd_dbname    = 'myDb';
    $curd_dbuser    = 'crud';  //dont know use which account
    $curd_dbpassword  = 'password';
    try {
        $insert_db = new PDO(
            "mysql:host={$curd_dbhost};dbname={$curd_dbname};",
            $curd_dbuser,
            $curd_dbpassword
        );
        $insert_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        error_log('Connection failed: ' . $e->getMessage());
    }
    //$crud_conn = mysqli_connect($curd_dbhost, $curd_dbuser, $curd_dbpassword, $curd_dbname);
    // Check connection
    //if ($crud_conn === false) {
    //    die("ERROR: Could not connect. "
    //        . mysqli_connect_error());
    //}

    // $Cus_ID = $_REQUEST['Cus_ID'];
    // $Mailing_Address =  $_REQUEST['Mailing_Address'];
    // $Credit_Card_Number = $_REQUEST['Credit_Card_Number'];
    // $Shipment_Method = $_REQUEST['Shipment_Method'];
    // $Shipping_Date = $_REQUEST['Shipping_Date'];
    // $Date_and_Time_of_Order = $_REQUEST['Date_and_Time_of_Order'];
    // $ISBN = $_REQUEST['ISBN'];
    // $Price = $_REQUEST['Price'];
    // $Purchase_Price = $_REQUEST['Purchase_Price'];
    // $Quantity_Purchased = $_REQUEST['Quantity_Purchased'];
    // $Shipping_Cost = $_REQUEST['Shipping_Cost'];
    // $Tax = $_REQUEST['Tax'];

    $Cus_ID = trim(filter_input(INPUT_POST, 'Cus_ID', FILTER_SANITIZE_STRING));
    $Mailing_Address = trim(filter_input(INPUT_POST, 'Mailing_Address', FILTER_SANITIZE_STRING));
    $Credit_Card_Number = trim(filter_input(INPUT_POST, 'Credit_Card_Number', FILTER_SANITIZE_STRING));
    $Shipment_Method = trim(filter_input(INPUT_POST, 'Shipment_Method', FILTER_SANITIZE_STRING));
    $Shipping_Date = trim(filter_input(INPUT_POST, 'Shipping_Date', FILTER_SANITIZE_STRING));
    $date = $_REQUEST['Date_and_Time_of_Order'];
    $Date_and_Time_of_Order = date('Y-m-d H:i:s', strtotime($date));
    $ISBN = trim(filter_input(INPUT_POST, 'ISBN', FILTER_SANITIZE_STRING));
    $Price = trim(filter_input(INPUT_POST, 'Price', FILTER_SANITIZE_STRING));
    $Purchase_Price = trim(filter_input(INPUT_POST, 'Purchase_Price', FILTER_SANITIZE_STRING));
    $Quantity_Purchased = trim(filter_input(INPUT_POST, 'Quantity_Purchased', FILTER_SANITIZE_STRING));
    $Shipping_Cost = trim(filter_input(INPUT_POST, 'Shipping_Cost', FILTER_SANITIZE_STRING));
    $Tax = trim(filter_input(INPUT_POST, 'Tax', FILTER_SANITIZE_STRING));


    //test --> Performing insert query execution
    // $sql = "INSERT INTO bookorder ('Cus_ID', 'Mailing_Address', 'Credit_Card_Number', 'Shipment_Method', 'Shipping_Date', 'Date_and_Time_of_Order', 'ISBN', 'Price', 'Purchase_Price', 'Quantity_Purchased', 'Shipping_Cost', 
    // 'Tax') VALUES ('". $_REQUEST['Cus_ID'] ."','". $_REQUEST['Mailing_Address'] ."','". $_REQUEST['Credit_Card_Number'] ."','". $_REQUEST['Shipment_Method'] ."','". $_REQUEST['Shipping_Date'] ."',
    // '". $_REQUEST['Date_and_Time_of_Order'] ."','". $_REQUEST['ISBN'] ."','". $_REQUEST['Price'] ."','". $_REQUEST['Purchase_Price'] ."','". $_REQUEST['Quantity_Purchased'] ."','". $_REQUEST['Shipping_Cost'] ."','". $_REQUEST['Tax'] ."')";

    // $sql = "INSERT INTO bookorder  ('$Cus_ID','$Mailing_Address','$Credit_Card_Number','$Shipment_Method','$Shipping_Date',
    //     '$Date_and_Time_of_Order','$ISBN','$Price','$Purchase_Price','$Quantity_Purchased','$Shipping_Cost','$Tax')";

    //Performing insert query execution
    $sql = "INSERT INTO `bookorder` (`Cus_ID`, `Mailing_Address`, `Credit_Card_Number`, `Shipment_Method`, `Shipping_Date`, 
    `Date_and_Time_of_Order`, `ISBN`, `Price`, `Purchase_Price`, `Quantity_Purchased`, `Shipping_Cost`, `Tax`) 
    VALUES ('$Cus_ID','$Mailing_Address','$Credit_Card_Number','$Shipment_Method','$Shipping_Date',
            '$Date_and_Time_of_Order','$ISBN','$Price','$Purchase_Price','$Quantity_Purchased','$Shipping_Cost','$Tax')";

    try {
        $stmt = $insert_db->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor();
    } catch (PDOException $e) {
        $stmt->closeCursor();
        _log_error('Database insert query failed: ' . $e->getMessage());
    } catch (Exception $e) {
        _log_error('Error: ' . $e->getMessage());
    }

    // upload success and result message
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$Order_Number\n$Cus_ID\n$Mailing_Address\n$Credit_Card_Number\n$Shipment_Method\n$Shipping_Date\n
            $Date_and_Time_of_Order\n$ISBN\n$Price\n$Purchase_Price\n$Quantity_Purchased\n$Shipping_Cost\n$Tax");
    // } else {
    //     _log_error ("ERROR: Hush! Sorry $sql. "
    //         . mysqli_error($crud_conn));
    // }

    // // Close connection
    // mysqli_close($crud_conn);
    ?>
</body>
    
    <h1><a href="insert.php">Click me to insert next bookorder</a></h1>
    
</html>
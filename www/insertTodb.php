<!DOCTYPE html>
<html>
<head>
    <title>Insert Page page</title>
</head>
<body>
        <?php
        $curd_dbhost    = 'db';
        $curd_dbname    = 'myDb';
        $curd_dbuser    = 'crud';  //dont know use which account
        $curd_dbpassword  = 'password';
        
        $crud_conn = mysqli_connect($curd_dbhost,$curd_dbuser,$curd_dbpassword,$curd_dbname);
        // Check connection
        if($crud_conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
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


        // Performing insert query execution
        $sql = "INSERT INTO bookorder ('Cus_ID', 'Mailing_Address', 'Credit_Card_Number', 'Shipment_Method', 'Shipping_Date', 'Date_and_Time_of_Order', 'ISBN', 'Price', 'Purchase_Price', 'Quantity_Purchased', 'Shipping_Cost', 
        'Tax') VALUES ('". $_REQUEST['Cus_ID'] ."','". $_REQUEST['Mailing_Address'] ."','". $_REQUEST['Credit_Card_Number'] ."','". $_REQUEST['Shipment_Method'] ."','". $_REQUEST['Shipping_Date'] ."',
        '". $_REQUEST['Date_and_Time_of_Order'] ."','". $_REQUEST['ISBN'] ."','". $_REQUEST['Price'] ."','". $_REQUEST['Purchase_Price'] ."','". $_REQUEST['Quantity_Purchased'] ."','". $_REQUEST['Shipping_Cost'] ."','". $_REQUEST['Tax'] ."')";

        //$ ."sql = "INSERT INTO 'bookorder' VALUES ('$Order_Number','$Cus_ID','$Mailing_Address','$Credit_Card_Number','$Shipment_Method','$Shipping_Date',
        //'$Date_and_Time_of_Order','$ISBN','$Price','$Purchase_Price','$Quantity_Purchased','$Shipping_Cost','$Tax')";

        if(mysqli_query($crud_conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$Order_Number\n$Cus_ID\n$Mailing_Address\n$Credit_Card_Number\n$Shipment_Method\n$Shipping_Date\n
            $Date_and_Time_of_Order\n$ISBN\n$Price\n$Purchase_Price\n$Quantity_Purchased\n$Shipping_Cost\n$Tax");

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($crud_conn);
        }
        
        // Close connection
        mysqli_close($crud_conn);
        ?>
</body>

</html>
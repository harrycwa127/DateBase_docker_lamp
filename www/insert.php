<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Add Data</title>
   </head>
   <body>
      
         <h1>Add Data into the table</h1>
         <form action="insertTodb.php" method="post">
            <p>
               <label for="CusID">Cus ID:</label>
               <input type="text" name="Cus_ID" id="CusID">
            </p> 
            
            <p>
               <label for="MailingAddress">Mailing Address:</label>
               <input type="email" name="Mailing_Address" id="MailingAddress">
            </p>
            
            <p>
               <label for="CreditCardNumber">Credit Card Number:</label>
               <input type="text" name="Credit_Card_Number" id="CreditCardNumber">
            </p>
            
            <p>
               <label for="ShipmentMethod">Shipment Method:</label>
               <input type="text" name="Shipment_Method" id="ShipmentMethod">
            </p>

            <p>
               <label for="ShippingDate">Shipping Date:</label>
               <input type="text" name="Shipping_Date" id="ShippingDate">
            </p>

            <p>
               <label for="DateandTimeofOrder">Date and Time of Order:</label>
               <input type="datetime-local" name="Date_and_Time_of_Order" id="DateandTimeofOrder">
            </p>

            <p>
               <label for="ISBN">ISBN:</label>
               <input type="text" name="ISBN" id="ISBN">
            </p>

            <p>
               <label for="Price">Price:</label>
               <input type="text" name="Price" id="Price">
            </p>

            <p>
               <label for="PurchasePrice">Purchase Price:</label>
               <input type="text" name="Purchase_Price" id="PurchasePrice">
            </p>

            <p>
               <label for="QuantityPurchased">Quantity Purchased:</label>
               <input type="text" name="Quantity_Purchased" id="QuantityPurchased">
            </p>

            <p>
               <label for="ShippingCost">Shipping Cost:</label>
               <input type="text" name="Shipping_Cost" id="ShippingCost">
            </p>

            <p>
               <label for="Tax">Tax:</label>
               <input type="text" name="Tax" id="Tax">
            </p>

            <input type="reset">

            <input type="submit" value="Submit">
         
         </form>
      
   </body>
</html>
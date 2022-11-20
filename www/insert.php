<?php
require_once '_reCAPTCHA.php';
?>
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Add Data</title>
</head>



<body>

   <h1>Add Data into the table</h1>
   <form action="insertTodb.php" method="post">
      <table border="0">
         <tr>
            <td><label for="CusID">Cus ID:</label></td>
            <td><input type="text" name="Cus_ID" id="CusID"></td>
         </tr>

         <tr>
            <td><label for="MailingAddress">Mailing Address:</label></td>
            <td><input type="email" name="Mailing_Address" id="MailingAddress"></td>
         </tr>

         <tr>
            <td><label for="CreditCardNumber">Credit Card Number:</label></td>
            <td><input type="text" name="Credit_Card_Number" id="CreditCardNumber"></td>
         </tr>

         <tr>
            <td><label for="ShipmentMethod">Shipment Method:</label></td>
            <td><input type="text" name="Shipment_Method" id="ShipmentMethod"></td>
         </tr>

         <tr>
            <td><label for="ShippingDate">Shipping Date:</label></td>
            <td><input type="text" name="Shipping_Date" id="ShippingDate" placeholder="yyyy-mm-dd"></td>
         </tr>

         <tr>
            <td><label for="DateandTimeofOrder">Date and Time of Order:</label></td>
            <td><input type="datetime-local" name="Date_and_Time_of_Order" id="DateandTimeofOrder"></td>
         </tr>

         <tr>
            <td><label for="ISBN">ISBN:</label></td>
            <td><input type="text" name="ISBN" id="ISBN"></td>
         </tr>

         <tr>
            <td><label for="Price">Price:</label></td>
            <td><input type="text" name="Price" id="Price"></td>
         </tr>

         <tr>
            <td><label for="PurchasePrice">Purchase Price:</label></td>
            <td><input type="text" name="Purchase_Price" id="PurchasePrice"></td>
         </tr>

         <tr>
            <td><label for="QuantityPurchased">Quantity Purchased:</label></td>
            <td><input type="text" name="Quantity_Purchased" id="QuantityPurchased"></td>
         </tr>

         <tr>
            <td><label for="ShippingCost">Shipping Cost:</label></td>
            <td><input type="text" name="Shipping_Cost" id="ShippingCost"></td>
         </tr>

         <tr>
            <td><label for="Tax">Tax:</label></td>
            <td><input type="text" name="Tax" id="Tax"></td>
         </tr>
      </table>
      <div class="g-recaptcha" data-sitekey="6LeHnAwjAAAAAOfDR6yzz6VoLnPeOTnx4jQWZzpn"></div>
      <input type="reset">
      <input type="submit" value="Submit">
      <?php
      //If not submit
      if ($_POST && isset($_POST['submit'])) {
         //If do not complete recaptcha
         if (!(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))) {
            echo "<h1>Please complete recaptcha</h1>";
         }
      }
      ?>
   </form>
</body>

</html>
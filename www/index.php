<?php
require_once '_route.php';

if (array_key_exists('is_logged', $_SESSION) === FALSE) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Hello...</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">

        <td colspan=2>
            <a href="logout.php">Logout</a>
        </td>

        <?php echo "<h1>Bookorder</h1>"; ?>
        <?php
        require_once '_route.php';
        $query = 'SELECT * From bookorder';
        $result = mysqli_query($conn, $query);

        echo '<table class="table table-striped">';
        echo '<thead><tr><th></th><th>Order Number</th><th>Customer ID</th><th>Mail Address</th><th>Shipment Method</th><th>Shipping Date</th><th>Date and Time of Order</th><th>ISBN</th><th>Price</th><th>Purchase Price</th><th>Quantity Purchased</th><th>Shipping Cost</th><th>Tax</th></tr></thead>';
        while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr>';
            echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';

            // unset credit_card information
            unset($value[3]);
            foreach ($value as $element) {
                echo '<td>' . $element . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        $result->close();

        mysqli_close($conn);

        ?>
    </div>
</body>

</html>
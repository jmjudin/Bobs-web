<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
    <h1>Bob's Auto parts</h1>
    <h2>Order Results</h2>
<?php
 echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
?>
<?php
 // create short variable names
 $tireqty = $_POST['tireqty'];
 $oilqty = $_POST['oilqty'];
 $sparksqty = $_POST['sparksqty'];

 echo '<p>Order Summary: </p>';
 echo htmlspecialchars($tireqty).' tires<br />';
 echo htmlspecialchars($oilqty).' bottles of oil<br />';
 echo htmlspecialchars($sparksqty).' spark plugs<br />';

?>
</body>
</html>
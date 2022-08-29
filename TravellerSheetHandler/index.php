<?php
include_once "includes/sheetDB.php";
?>

<!DOCTYPE html>
<html>
    <head> 
    <meta charset = "UTF-8">
    <title>Traveller Sheets </title>
    </head>
<body>
    <h1>Traveller Character Sheet</h1>
<?php
$object = new travellerSheetDatabase;
$object->connect();

?>
</body>
    </html>

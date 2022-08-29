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
<?php
$object = new travellerSheetDatabase;
$object->connect();

?>
</body>
    </html>

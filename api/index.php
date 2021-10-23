
<?php require __DIR__ . "/../database.php"; ?>


<?php
require __DIR__ . "/../database.php";
header("Content-type: application/json");

if( !empty($_GET ["genre"]) ) {
    $genre = ($_GET ["genre"]);
    $databaseFiltered = [];

    foreach($database as $disk) {
        if ($genre == $disk["genre"]) {
            $databaseFiltered[] = $disk;
        }
    } 
    echo json_encode($databaseFiltered);

} else {
    echo json_encode($database);
}

?>

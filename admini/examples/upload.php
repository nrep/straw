<?php
include_once("../../connection.php");
include_once("../../helpers.php");

$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$filename = $_FILES['file']['name'];

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
    $status = 1;

    $query = "INSERT INTO videos(name) VALUES('$filename')";

    if ($connection->query($query) === TRUE) {
        $lastId = getLast("id", "videos");
        header("location: describe-new.php?q=$lastId");
    } else {
        echo $connection->error;
    }
}
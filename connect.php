<?php
$NAME = $_POST['Name'];
$GENDER = $_POST['Gender'];
$AGE = $_POST['Age'];
$CONTACTNO = $_POST['ContactNo'];
$FLAVOUR = $_POST['flavour'];
$FLAVOUR1 ="";

foreach ($FLAVOUR as $fav){ 
    $FLAVOUR1 = $FLAVOUR1 . $fav.",";
}

$conn = new mysqli('localhost', 'root','','restaurant');

if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into customer(NAME,GENDER,AGE,CONTACTNO,FLAVOUR)
        values (?,?,?,?,?)");
    $stmt->bind_param("sssis", $NAME, $GENDER, $AGE, $CONTACTNO, $FLAVOUR1);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

include 'thanks.html';

?>

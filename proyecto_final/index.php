<?php
    require_once "class/Database.php";

    $db= new Database;
//SI QUEREMOS QUE SE VISUALICE FORMATO ARRAY  
//$data=$db->selectALL();
//print_r($data);
//SI QUEREMOS QUE SE VISUALICE FORMATO JSON
//$data=$db->selectALL();
//echo json_encode($data);

$data=$db->selectALL();
print_r($data);

echo "<br><br>";

$user=$db->selectById(2);
print_r($user);

?>
 
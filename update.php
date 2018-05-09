<?php
// TODO change to PDO function

//update.php
$connect = mysqli_connect("localhost", "root", "", "crud");
//$page_id = $_POST["page_id_array"];
for($i=0; $i<count($_POST["page_id_array"]); $i++)
{
    $query = "
 UPDATE sl_projects 
 SET project_order = '".$i."' 
 WHERE id = '".$_POST["page_id_array"][$i]."'";
    mysqli_query($connect, $query);
}


?>
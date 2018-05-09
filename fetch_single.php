<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM sl_projects 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1 "
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
    {






        $output["sl_nr"] = $row["sl_nr"];
        $output["project"] = $row["project"];
        $output["sl_budget"] = $row["sl_budget"];




    }
	echo json_encode($output);
}
?>
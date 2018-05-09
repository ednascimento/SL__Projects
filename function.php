<?php



function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM sl_projects");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}


/*function get_total_budget() {
    include('db.php');
    $statement = $connection->prepare("SELECT sum( sl_budget ) AS totalsum FROM sl_projects");
    $statement->execute();
    $result = $statement->fetchAll();
    return $statement->rowCount();
}
echo (get_total_budget());*/

// mysqli version

// TODO change to PDO function

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "vertrigo");
define("DB_NAME", "crud");


$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);


$result= mysqli_query( $mysqli, 'SELECT SUM(sl_budget) AS totalsum FROM sl_projects WHERE is_intern = 0');
$result_intern= mysqli_query( $mysqli, 'SELECT SUM(sl_budget) AS totalsum FROM sl_projects WHERE is_intern = 1');

$row = mysqli_fetch_assoc($result);
$row_intern = mysqli_fetch_assoc($result_intern);

$sum = $row['totalsum'];
$sum_intern = $row_intern['totalsum'];

//$query .= 'WHERE sl_nr LIKE "%'.$_POST["search"]["value"].'%"';




?>
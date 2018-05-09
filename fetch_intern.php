<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM sl_projects WHERE is_intern = 1 " ;
if(isset($_POST["search"]["value"]))
{



}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY project_order ASC ';
}

$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();

foreach($result as $row)
{



    $slNr = '';
    if($row["sl_nr"] != '')
    {
        $slNr = '<td >'. $row["sl_nr"]. '<div id="'.$row["id"].'" class="sl-intern ui-sortable-handle"></div>' .'</td>';
    }
    else
    {
        $slNr = '';
    }

    $sub_array = array();

    $sub_array[] = $slNr ;
	$sub_array[] = $row["project"] .'<img id="'.$row["id"].'" src="custom_styles/close.svg" alt="close" class="fas fa-times delete"><img id="'.$row["id"].'" src="custom_styles/edit.svg" alt="edit" class="fas fa-times update">';
	$sub_array[] = $row["sl_budget"] . ".-";
	$sub_array[] = '<i id="'.$row["id"].'" class="fas fa-edit update"></i>';
	$sub_array[] = '<i id="'.$row["id"].'" class="fas fa-times delete"></i>';
	$data[] = $sub_array;

}




$output = array(
    "draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);


echo json_encode($output);


?>
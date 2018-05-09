<?php
include('db.php');
include('function.php');

if(isset($_POST["operation"]))
{
    if($_POST["operation"] == "Add")
    {

        $statement = $connection->prepare("
			INSERT INTO sl_projects (sl_nr, project, sl_budget, is_intern) 
			VALUES (:sl_nr, :project, :sl_budget, :is_intern)
		");
        $result = $statement->execute(
            array(
                ':sl_nr'	=>	$_POST["sl_nr"],
                ':project'	=>	$_POST["project"],
                ':sl_budget'	=>	$_POST["sl_budget"],
                ':is_intern'	=>	$_POST["is_intern"]
            )
        );
        if(!empty($result))
        {
            echo 'Data Inserted';
        }
    }



        if($_POST["operation"] == "Edit")
    {

        $statement = $connection->prepare(
            "UPDATE sl_projects 
			SET sl_nr = :sl_nr, project = :project, sl_budget = :sl_budget  
			WHERE id = :id
			"
        );
        $result = $statement->execute(
            array(
                ':sl_nr'	=>	$_POST["sl_nr"],
                ':project'	=>	$_POST["project"],
                ':sl_budget'	=>	$_POST["sl_budget"],
                ':id'			=>	$_POST["user_id"]
            )
        );
        if(!empty($result))
        {
            echo 'Data Updated';
        }
    }
}

?>
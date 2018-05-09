<?php include_once ('function.php');

// TODO change to PDO

$connect = mysqli_connect("localhost", "root", "vertrigo", "crud");
$query = "SELECT * FROM sl_projects ORDER BY project_order ASC";
$result = mysqli_query($connect, $query);

?>


<html>
	<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="custom_styles/main_styles.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        
        <script type="text/javascript">
            $(document).ready(function() {
                $("#ShowTable").click(ShowTable);
                });
            function ShowTable(){
                $("#Projects").show();
                $("#Offers").hide();
            }
            
            $(document).ready(function() {
                $("#TableOffers").click(TableOffers);
                });
            function TableOffers(){
                $("#Offers").show();
                $("#Projects").hide();
                $("#Leads").hide();
            }
            
            $(document).ready(function() {
                $("#TableLeads").click(TableLeads);
                });
            function TableLeads(){
                $("#Leads").show();
                $("#Projects").hide();
                $("#Offers").hide();
            }
             
        </script>
        
    </head>
	<body>
		<div class="container box">
            <div class="logo-text">SL</div>
                <div align="right" class="top-btn">
                    
                    <!--
                    <input  class="sl-btn" type="submit" id="projects" value="Projects" onclick="showTable()" />
                    <input  class="sl-btn" type="submit" id="offers" value="Offers" onclick="showTable()" />
                    <input  class="sl-btn" type="submit" id="leads" value="Leads" onclick="showTable()" />
					-->
				    
					<button type="button" id="ShowTable" class="sl-btn">Project</button>
					<button type="button" id="TableOffers" class="sl-btn">Offers</button>
					<button type="button" id="TableLeads" class="sl-btn">Leads</button>

				</div>
           <!-- <header class="sl-header"></header>-->
            
            <div class="table-responsive" id="Projects">
            <h1 align="center">Projects 2018</h1>
			<br />
				<br />
				<div align="left">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="sl-btn">New</button>
				</div>
				
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
                    <thead>
						<tr class="top-row">
							<th width="15%">Nr.</th>
							<th width="50%">External Projects</th>
							<th width="15%">Budget</th>
							<th width="0" style="display: none">Edit</th>
							<th width="0" style="display: none">Delete</th>
						</tr>
					</thead>

                    <tbody class="project_data connectedSortable">
                    </tbody>
				</table>

                <table  class="table table-bordered table-striped table-total">

                    <thead>
                    <tr class="top-row">
                        <th width="15%"></th>
                        <th width="50%">Total</th>
                        <th width="15%"><?php echo ( $sum. ".-")?></th>
                    </tr>

                    </thead>
                </table>

                <table id="user_data_intern" class="table table-bordered table-striped">

                    <thead>
                    
                    <tr class="top-row">
                        <th width="15%">Nr.</th>
                        <th width="50%">Internal Projects</th>
                        <th width="15%">Budget</th>
                        <th width="0" style="display: none">Edit</th>
                        <th width="0" style="display: none">Delete</th>
                    </tr>
                    </thead>
                    <tbody class="project_data_intern connectedSortable">
                    </tbody>
                    <table  class="table table-bordered table-striped table-total">

                        <thead>
                        <tr class="top-row">
                            <th width="15%"></th>
                            <th width="50%">Total</th>
                            <th width="15%"><?php echo ( $sum_intern. ".-")?></th>
                        </tr>

                        </thead>
                    </table>



                </table>
			</div>
			
			<div class="table-offers" id="Offers">
            <h1 align="center">Offers 2018</h1>
			<br />
				<br />
				<div align="left">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="sl-btn">New</button>
				</div>
				
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
                    <thead>
						<tr class="top-row">
							<th width="15%">Nr.</th>
							<th width="50%">External Projects</th>
							<th width="15%">Budget</th>
							<th width="0" style="display: none">Edit</th>
							<th width="0" style="display: none">Delete</th>
						</tr>
					</thead>

                    <tbody class="project_data connectedSortable">
                    </tbody>
				</table>


                <table  class="table table-bordered table-striped table-total">

                    <thead>
                    <tr class="top-row">
                        <th width="15%"></th>
                        <th width="50%">Total</th>
                        <th width="15%"><?php echo ( $sum. ".-")?></th>
                    </tr>

                    </thead>
                </table>

                <table id="user_data_intern" class="table table-bordered table-striped">

                    <thead>
                    
                    <tr class="top-row">
                        <th width="15%">Nr.</th>
                        <th width="50%">Internal Projects</th>
                        <th width="15%">Budget</th>
                        <th width="0" style="display: none">Edit</th>
                        <th width="0" style="display: none">Delete</th>
                    </tr>
                    </thead>
                    <tbody class="project_data_intern connectedSortable">
                    </tbody>
                    <table  class="table table-bordered table-striped table-total">

                        <thead>
                        <tr class="top-row">
                            <th width="15%"></th>
                            <th width="50%">Total</th>
                            <th width="15%"><?php echo ( $sum_intern. ".-")?></th>
                        </tr>

                        </thead>
                    </table>



                </table>
			</div>
			
			<div class="table-leads" id="Leads">
            <h1 align="center">Leads 2018</h1>
			<br />
				<br />
				<div align="left">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="sl-btn">New</button>
				</div>
				
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
                    <thead>
						<tr class="top-row">
							<th width="15%">Nr.</th>
							<th width="50%">External Projects</th>
							<th width="15%">Budget</th>
							<th width="0" style="display: none">Edit</th>
							<th width="0" style="display: none">Delete</th>
						</tr>
					</thead>

                    <tbody class="project_data connectedSortable">
                    </tbody>
				</table>


                <table  class="table table-bordered table-striped table-total">

                    <thead>
                    <tr class="top-row">
                        <th width="15%"></th>
                        <th width="50%">Total</th>
                        <th width="15%"><?php echo ( $sum. ".-")?></th>
                    </tr>

                    </thead>
                </table>

                <table id="user_data_intern" class="table table-bordered table-striped">

                    <thead>
                    
                    <tr class="top-row">
                        <th width="15%">Nr.</th>
                        <th width="50%">Internal Projects</th>
                        <th width="15%">Budget</th>
                        <th width="0" style="display: none">Edit</th>
                        <th width="0" style="display: none">Delete</th>
                    </tr>
                    </thead>
                    <tbody class="project_data_intern connectedSortable">
                    </tbody>
                    <table  class="table table-bordered table-striped table-total">

                        <thead>
                        <tr class="top-row">
                            <th width="15%"></th>
                            <th width="50%">Total</th>
                            <th width="15%"><?php echo ( $sum_intern. ".-")?></th>
                        </tr>

                        </thead>
                    </table>



                </table>
			</div>
			
			<br />
			
			
			
		</div>
	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
                    <label>Order number:</label>
                    <input type="text" name="sl_nr" id="sl_nr" class="form-control" />
                    <br />
					<label>Project name</label>
					<input type="text" name="project" id="project" class="form-control" />
					<br />
                    <label>Budget</label>
                    <input type="text" name="sl_budget" id="sl_budget" class="form-control" />
                    <br />
                    <label>Intern</label>
                    <input type="hidden" name="is_intern" id="is_intern" class="form-control" value="o"/>
                    <input type="checkbox" name="is_intern" id="is_intern" class="form-control" value="1"/>

                    <br />

				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >

    //-------------------- DRAGGABLE --------------------//

    $(document).ready(function(){
        $( "tbody.project_data, tbody.project_data_intern" ).sortable({
             connectWith: '.connectedSortable',
             placeholder : "ui-state-highlight",
            update  : function(event, ui)
            {
                let tbody = $("tbody tr").find('div');
                const page_id_array = new Array();
                const page_location = new Array();
                let find_sib = $(this).find('div');
                tbody.each(function(){

                    page_id_array.push($(this).attr("id"));
                });

                // TODO try to store content in external and intern table

                find_sib.each(function () {
                    if( find_sib.hasClass('sl-extern')){

                        page_location.push(1);
                    } else {

                        page_location.push(0);
                    }

                });

                    // console.log(page_id_array);
                    // console.log(tbody);
                    // console.log(page_location);
                $.ajax({
                    url:"update.php",
                    method:"POST",
                    data:{page_id_array:page_id_array},
                    success:function(data)
                    {

                    }
                });
            }
        }).disableSelection();

    });

    //-------------------- READ --------------------//

$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add Project");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});

	var dataTable = $('#user_data').DataTable({

		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
                // This option will determine which column's aren't sortable
				"targets":[0, 2, 3, 4],
				"orderable":false,
			},
		],

	});

    var dataTable_intern = $('#user_data_intern').DataTable({

        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"fetch_intern.php",
            type:"POST"
        },
        "columnDefs":[
            {
                // This option will determine which column's aren't sortable
                "targets":[0, 2, 3, 4],
                "orderable":false,
            },
        ],

    });



    //-------------------- CREATE --------------------//

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		const project = $('#project').val();
		const slBudget = $('#slBudget').val();
        const slNr = $('#sl_nr').val();
        const slIntern = $('#is_intern').val();
		/*
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Invalid Image File");
				$('#user_image').val('');
				return false;
			}
		}
			*/
		if(project != '' && slBudget != '' && slNr != '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
					dataTable_intern.ajax.reload();
				}
			});
		}
		else
		{
			alert("All Fields are Required");
		}
	});

	//-------------------- UPDATE --------------------//

	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#sl_nr').val(data.sl_nr);
				$('#project').val(data.project);
				$('#sl_budget').val(data.sl_budget);
				$('#is_intern').val(data.is_intern);
				$('.modal-title').text("Auftrag bearbeiten");
				$('#user_id').val(user_id);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});

    //-------------------- DELETE --------------------//

	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Möchtest du diesen Eintrag wirklich löschen?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
					dataTable_intern.ajax.reload();
				}
			});
		}
		else
		{
			return false;
		}
	});
    
    //****************** CHANGE TABLE ******************** //

    
});
</script>
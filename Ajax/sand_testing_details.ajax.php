<?php 
	if (session_id() == '') {
    session_start();
	//$_SESSION['first_name']=$result[0];
	$login_id = $_SESSION['s_id'];
}
	include('../pages/required/db_connection.php');
	include('../pages/required/tables.php');
	require('../pages/required/functions.php');
	
	//data retrieval
	$moisture = $_POST['e1'];
	$clay = $_POST['e2']; 
	$o_additives = $_POST['e3'];
	$shear_strength = $_POST['e4'];
	$Permiability = $_POST['e5'];
	$active_clay = $_POST['e6'];
	$dead_clay = $_POST['e7'];
	$gfn = $_POST['e8'];
	$gcs = $_POST['e9'];
	$Compactability = $_POST['e10'];
	$mould_hardness = $_POST['e11'];


//modified data
	//$string_defects = implode('-', $defects);
	
	date_default_timezone_set('Asia/Kolkata');
	$created_at = date('Y-m-d h:i:s');
	$updated_at = date('0000-00-00 00:00:00');
	$status = 1;
	
	$table_no = 3;
	$table_name = 'sand_testing_details_master';
	$insert_values = "NULL,".$moisture.",".$clay.",".$o_additives.",".$shear_strength.",".$Permiability.",".$active_clay.",".$dead_clay.",".$gfn.",".$gcs.",".$Compactability.",".$mould_hardness.",'".$created_at."','".$updated_at."',".$status;

	//echo $insert_values; 
	$sand_testing_details_insert_result = db_insert($table_no,$table_name,$insert_values);

	//echo '<br>'.$sand_testing_details_insert_result;

	if($sand_testing_details_insert_result == 1){
	
	?>
	<div class="callout callout-success">
				<h4>Successful</h4>
				<?php //echo "The file ". htmlspecialchars( basename($res_doc)). " has been uploaded.";?>
				<p>Sand Testing Details Added</p>
	</div>
	<?php }else{?>
		<div class="callout callout-danger">
								<h4>Unable to add sand testing details</h4>

								<p>Check Out.</p>
							  </div>
	<?php }?>						  
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
	$product_id = $_POST['e1'];
	$quantity = $_POST['e2']; //casting_weight
	$defects = $_POST['e3'];
	$location = $_POST['e4'];

//modified data
	$string_defects = implode('-', $defects);
	
	date_default_timezone_set('Asia/Kolkata');
	$created_at = date('Y-m-d h:i:s');
	$updated_at = date('0000-00-00 00:00:00');
	$status = 1;
	
	$table_no = 1;
	$table_name = 'quality_inspection_master';
	$insert_values = "NULL,'".$product_id."',".$quantity.",'".$string_defects."','".$location."','".$created_at."','".$updated_at."',".$status;

	//echo $insert_values; 
	$product_defect_insert_result = db_insert($table_no,$table_name,$insert_values);

	//echo $product_defect_insert_result;

	if($product_defect_insert_result == 1){
	
	?>
	<div class="callout callout-success">
				<h4>Successful</h4>
				<?php //echo "The file ". htmlspecialchars( basename($res_doc)). " has been uploaded.";?>
				<p>Product Defect Added</p>
	</div>
	<?php }else{?>
		<div class="callout callout-danger">
								<h4>Unable to add defect</h4>

								<p>Check Out.</p>
							  </div>
	<?php }?>						  
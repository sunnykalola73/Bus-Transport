<?php
session_start();
if(!$_SESSION['user']){
	header('location:../login.php');
}
include('../connect.php');
if(isset($_REQUEST['did'])){
	$id=$_REQUEST['did'];

	$del="delete from user where id=$id";
	$re_del=$connect->query($del);

	if($re_del){
		?>
		<script type="text/javascript">
			alert('Delete Successfully');
			window.location="index.php"
		</script>
		<?php
	}
	else{
		echo "Delete not Success";
	}
}

?>
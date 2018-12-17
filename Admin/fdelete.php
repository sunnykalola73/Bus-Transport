<?php
session_start();
if(!$_SESSION['user']){
	header('location:../login.php');
}
include('../connect.php');
if(isset($_REQUEST['did'])){
	$id=$_REQUEST['did'];

	$del="delete from feedback where id=$id";
	$re_del=$connect->query($del);

	if($re_del){
		?>
		<script type="text/javascript">
			alert('Feedback deleted successfully');
			window.location="feedback.php"
		</script>
		<?php
	}
	else{
		echo "Delete not Success";
	}
}

?>
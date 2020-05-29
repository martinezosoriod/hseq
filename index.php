<?php 
//	include 'config.php';
	require 'config.php';


	$consult = "SELECT * FROM home";
	$query = mysqli_query($conn,$consult);
?>

<!doctype html>
<html lang="es" class="no-js">
	<head>
		<?php include 'view/template.php'?>
		<?php include 'view/stylesheet.php'?>
		<?php include 'view/template_script.php'?>
	</head>
	<body>
		<?php include 'view/header.php' ?>
		<div class="container">
			<?php include 'view/text.php'?>
			<div class="main clearfix">
				<?php include 'view/menu.php'?>
			</div>
		</div>
		<?php include 'view/navscript.php' ?>
		<?php include 'view/footer.php' ?>
		<?php echo $query;?>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="1"/>
		<style>
		p{
			color:blue;
			font-size:50px;
			position:absolute;
			top:50%;
			left:50%;
			transform:translate(-50%, -50%)
		}
		body{
			background-color:grey;
		}
		</style>
	</head>
	<body>
		<p><?php echo date("h:i:s A");?></p>
	</body>
</html>

<?php
session_start();
?>
<html>
	<head>
		<title>Итоги олимпиад</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/style3.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/button.css" media="screen" />
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	</head>
	<body>	
		<?php include ("header.php");?>
	<div id="main">
		<div id="inside_main">
			<div id="name">
				<p id="name_p">Итоги олимпиад</p>
			</div>
		
				<div id="content">
					<?php include ("forms/res1.php");?>	

				</div>
				
				<div id="right_cont">
				<div><?php include ("calendar/index.php");?></div>
				<div id="best"><?php include ("forms/best.php");?></div>
			</div>
		<div style="clear:both;"></div>
		</div>
	</div>
		<?php include ("footer.php");?>	
		
	</body>
</html>

<?php
if(isset($_GET['menu']))$menu=$_GET['menu']; else $menu='home';
$isi=file_get_contents("content/".$menu.".html");
?>
<html>
<head>
	<title>Menu : <?=$menu;?></title>
</head>
	<body>
		<div>
			<a href="?menu=home">Home</a>&nbsp;&nbsp;&nbsp;
			<a href="?menu=about">Home</a>&nbsp;&nbsp;
			<a href="?menu=profile">Home</a>
		</div>


		<div style="width:960px; margin:auto; min-height:200px; overflow:auto;">

			<?=$isi;?>	

		</div>

	</body>

</html>

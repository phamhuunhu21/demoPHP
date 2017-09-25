<div class="leftcontent">
	<?php
		if (isset($_GET['ac'])){
			$tam=$_GET['ac'];
		} else{
			$tam='';
		} if ($tam=='them'){
			include('modules/quanlyloaisp/them.php');
		} if ($tam=='sua'){
			include('modules/quanlyloaisp/sua.php');
		}
	?>
</div>
<div class="rightcontent">
	<?php
		include('modules/quanlyloaisp/lietke.php');
	?>
</div>
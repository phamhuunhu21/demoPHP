<div class="content">   
	<div class="leftcontent">
    	<?php
			include('modules/leftcontent/danhsach.php');
		?>
    </div>
	<div class="rightcontent">
    	<?php
			if (isset($_GET['xem'])){
				$tam=$_GET['xem'];
			} else{
				$tam='';
			} if ($tam=='chitietloaisanpham'){
				include('modules/rightcontent/chitietloaisanpham.php');				
			} else if ($tam=='chitietsanpham'){
				include('modules/rightcontent/chitietsanpham.php');
			} else{
				include('modules/rightcontent/sanpham.php');
			}
		?>
    </div>
</div>
<div class="clear"></div>
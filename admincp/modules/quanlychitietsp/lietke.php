<?php
	/*$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='webbanhangcongnghe';
	$conn = mysql_connect($tenmaychu, $tentaikhoan, $pass);
	mysql_select_db($csdl);*/
	$sql="select * from chitietsp, loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp desc";
	echo $sql;
	//cau query cua ban k tra ve ket qua  @_@ vi chua co du lieu. gio minh thu them du lieu nhe. 
	$run=mysql_query( $sql);
	if (!$run){
		die("Error running $sql : ".mysql_error());
	}
	//ban chya thu di
?>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên SP</td>
    <td>Hình ảnh</td>    
    <td>Giá</td>
    <td>Loại SP</td>
    <td>Thứ tự</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  	$i=0;
	while ($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tensp']; ?></td>
    <td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60" /></td>    
    <td><?php echo $dong['gia']; ?></td>
    <td><?php echo $dong['tenloaisp'];?></td>
    <td><?php echo $dong['thutu'];?></td>
    <td><a href="index.php?qualy=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp'] ?>">Sửa</a></td>
    <td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>">Xóa</a></td>
  </tr>
  <?php
  	$i++;
	}
  ?>
</table>

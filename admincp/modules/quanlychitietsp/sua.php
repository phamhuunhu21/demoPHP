<?php 
	$sql="select * from chitietsp where id_sp='$_GET[id]'";
	$run=mysql_query($sql);
	$dong=mysql_fetch_array($run);
?>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2">Sửa chi tiết sản phẩm</td>
  </tr>
  <tr>
    <td width="209">Tên SP</td>
    <td width="495"><input type="text" name="tensp" value="<?php echo $dong['tensp'] ?>"></td>
  </tr>
  <tr>
    <td>Giá SP</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea name="motasp" cols="55" rows="15"><?php echo $dong['mota'] ?></textarea></td>
  </tr>
  <?php
  	$sql_loaisp="select * from loaisp";
	$run_loaisp=mysql_query($sql_loaisp);
  ?>
  <tr>
    <td>Loại SP</td>
    <td><select name="loaisp">
    	<?php
			while ($dong_loaisp=mysql_fetch_array($run_loaisp)){
				if ($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
		?>
    	<option selected="selected" value="<?php echo $dong_loaisp['tenloaisp']?>"><?php echo $dong_loaisp['tenloaisp']?></option>
        <?php
			} else{					
		?>
        <option value="<?php echo $dong_loaisp['tenloaisp']?>"><?php echo $dong_loaisp['tenloaisp']?></option>		
        <?php 
			}
			}
		?>
    </select></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button value="Sửa" name="sua">Sửa</button>
    </div></td>
  </tr>
</table>
</form>
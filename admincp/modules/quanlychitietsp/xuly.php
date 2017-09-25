<?php
	include('../config.php');
	$id=$_GET['id'];
	settype($id, "int");
	$tensp=$_POST['tensp'];
	$mota=$_POST['motasp'];
	$gia=$_POST['gia'];
	settype($gia, "int");
	$thutu=$_POST['thutu'];
	$loaisp=$_POST['loaisp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	if (isset($_POST['them'])){
		$sql="insert into chitietsp(tensp, hinhanh, gia, mota, loaisp, thutu) values('$tensp', '$hinhanh', '$gia', '$mota', '$loaisp', '$thutu')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	} else if(isset($_POST['sua'])){
		if ($hinhanh!=''){
		$sql="update chitietsp set tensp='$tensp', hinhanh='$hinhanh', gia='$gia', mota='$mota', id_loaisp='$loaisp', thutu='' where id_sp='$id'";
		} else{
		$sql="update chitietsp set tensp='$tensp', gia='$gia', mota='$mota', id_loaisp='$loaisp', thutu='' where id_sp='$id'";
		}
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	} else{
		$sql="delete from chitietloaisp where id_sp='$id'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');		
	}
?>
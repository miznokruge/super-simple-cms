<?php
$editor1=$_POST['editor1'];
$act=file_put_contents('../fm.html', $editor1);

if($act){
	echo 'oke';
}else{
	echo 'gagal bro';
}

?>
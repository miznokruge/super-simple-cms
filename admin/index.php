<?php
if(isset($_GET['menu']))$menu=$_GET['menu']; else $menu='home';
$isi=file_get_contents("../content/".$menu.".html");


if(isset($_POST['editor1'])){

	$put_isi=file_put_contents("../content/".$menu.".html",$_POST['editor1']);

	if($put_isi){
		header("location:demo.php?menu=".$menu);
	}

}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Replace Textarea by Code - CKEditor Sample</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	<script src="sample.js" type="text/javascript"></script>
	<link href="sample.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
			<a href="?menu=home">Home</a>&nbsp;&nbsp;&nbsp;
			<a href="?menu=about">About</a>&nbsp;&nbsp;
			<a href="?menu=work">Portfolio</a>&nbsp;&nbsp;
			<a href="?menu=news">News</a>
			<a href="?menu=contact">Contact</a>
		</div>
        	<h1>
		FileManager in CKEditor Sample
	</h1>
	<!-- This <div> holds alert messages to be display in the sample page. -->
	<div id="alerts">
		<noscript>
			<p>
				<strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript
				support, like yours, you should still see the contents (HTML data) and you should
				be able to edit it normally, without a rich editor interface.
			</p>
		</noscript>
	</div>
	<form action="" method="post">
		<p>
			
			<textarea cols="80" id="editor1" name="editor1" rows="10"><?php echo $isi;?></textarea>
			<script type="text/javascript">
			//<![CDATA[

				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				CKEDITOR.replace( 'editor1',
                {
                    filebrowserBrowseUrl :'js/ckeditor/filemanager/browser/default/browser.html?Connector=http://cms.test/admin/js/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserImageBrowseUrl : 'js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=http://cms.test/admin/js/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserFlashBrowseUrl :'js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=http://cms.test/admin/js/ckeditor/filemanager/connectors/php/connector.php',
					filebrowserUploadUrl  :'http://cms.test/admin/js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
					filebrowserImageUploadUrl : 'http://cms.test/admin/js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
					filebrowserFlashUploadUrl : 'http://cms.test/admin/js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
				});

			//]]>
			</script>
		</p>
		<p>
		  <input type="submit" name="button" id="button" value="Submit" />
		</p>
		
	</form>
	<div id="footer">
		<hr />
		<p>
			CKEditor - The text editor for Internet - <a href="http://ckeditor.com/">http://ckeditor.com</a>
		</p>
		<p id="copy">
			Copyright &copy; 2003-2010, <a href="http://cksource.com/">CKSource</a> - Frederico
			Knabben. All rights reserved.
		</p>
	</div>
</body>
</html>

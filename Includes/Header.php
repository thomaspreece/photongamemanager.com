<?php
include('Constants.php');

//Echo Header
Echo "<!DOCTYPE html>
<html lang='en-GB'>
<head>
<meta name=\"Description\" content=\"".$MetaDescription."\" />
<meta name=\"Keywords\" content=\"".$MetaKeywords."\" />
<meta charset='UTF-8'>
<link rel='shortcut icon' href='".$DOMAIN."/favicon.ico?v=3' />
<meta name='viewport' content='width=device-width' />
<title>".$MetaTitle."</title>
";


//Load CSS
require_once($_SERVER['DOCUMENT_ROOT'].$FOLDER."/Includes/HeaderCSS.php");


//Load Javascript
require_once($_SERVER['DOCUMENT_ROOT'].$FOLDER."/Includes/HeaderJavascript.php");
	

//Continue Head
Echo "</head>

<body>
<div id='PageDiv' style='position:relative; min-height:100%;'>
";

//Load Top Menu
require_once($_SERVER['DOCUMENT_ROOT'].$FOLDER."/Includes/TopMenu.php");

echo "

	<div style='min-height:100%; max-width:1024px;margin-left:auto;margin-right:auto;'> 
		<div id='BodyMiddle'>
				<a id='Home'></a>

				<div id='MenuGap' style='height:65px;'></div>
				<div style='padding:10px;'>
				
";

?>
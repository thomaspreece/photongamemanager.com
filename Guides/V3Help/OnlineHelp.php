<?php
			
$MetaDescription="Find extensive step-by-step guides showing how to operate Photon Game Manager V3";
$MetaKeywords="Help,guide,Game,Manager,GameManager,Photon";
$MetaTitle="V3 Manual - Photon";
$PageName="OnlineHelp.php";
include("../../Includes/Header.php");	

?>				
<h1>Photon V3 Manual</h1>

<div class='EmulatorContainer'>
Below are the manual pages from our old version of Photon Game Manager, V3. V3 is a usable product but it has many quirks with the interface which simply do not compare to the user-friendliness of V4. V3 also has a lot less features than V4 does and the graphics engine isn't quite as advanced so doesn't look as good and is slower than V4. So why not help support me by buying a license key for V4 and get a better product.
<div class='DownloadLink'>
	<a href='<?php echo $DOMAIN."/";?>Guides/guides.php'>Back to Guide List</a>
</div>
</div>

<table style='width:100%'>
	<colgroup style='width:170px'></colgroup>
	<colgroup style='width:*'></colgroup>		
<tr>
	<td class='AlignTopBorder'>
		<div style='Padding:5px;'>
		<?php include("Index.html") ?>
		</div>
	</td>
	<td  class='AlignTopBorder'>
		<div style='Padding:5px;'>
		<?php
		if(isset($_GET["page"])) {
			
			preg_match("/[a-zA-Z]*\.html/", $_GET["page"], $matches);
			if(isset($matches[0])){
				$page = $matches[0];
				if (file_exists($page)){
					include($page);
				}else{
					echo "No Such File";
				}
			}else{
				echo "No Such File";
			}
		}
		
		?>
		</div>
	</td>
</tr>	
</table>
					
<?php


include("../../Includes/Footer.php");			
?>
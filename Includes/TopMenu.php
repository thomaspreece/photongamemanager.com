<Nav>
<div id='MainMenu' style='background-image: url(<?php echo $DOMAIN;?>/Resources/Header.png);'>
<!-- style='background-image: url(<?php echo $DOMAIN;?>/Resources/BackGrad70_blue.png);' -->
<?php
	
	echo "
	<div style='max-width:1024px;margin-right:auto;margin-left:auto;'>
	<table style='width:100%;border-collapse: collapse;'>
		<colgroup style='width:220px'></colgroup>
		<colgroup style='width:*'></colgroup>
		<tr>
			<td>
				<div id='LogoDiv' style='width:180px;margin-left:20px;margin-right:20px;margin-top:3px;'>
					<a class='IndexLinkTop' href='".$DOMAIN."/index.php#Home'><img alt='Arcade Cabinet Logo with text Photon Game Manager' id='Logo' title='Photon Game Manager' src='".$DOMAIN."/Resources/TopTitleBar.png' style='width:100%;' /></a>
				</div>	
			</td>
			<td>
	";
?>
				<div style='width:100%;float:right'>
					<ul id='MainMenuNav'>
							<li><a id='FeatureSectionLink' class='firstlink IndexLink' href='<?php echo $DOMAIN;?>/index.php#Features'>Features</a></li>
							<li><a id='DownloadSectionLink' class='firstlink IndexLink' href='<?php echo $DOMAIN;?>/index.php#Download'>Download</a></li>	
							<li><a id='BuySectionLink' class='firstlink IndexLink' href='<?php echo $DOMAIN;?>/index.php#Buy'>Buy</a></li>	
							<li><a class='firstlink <?php if($PageName=="faq.php") echo "selectedfirstlink"; ?>' href='<?php echo $DOMAIN;?>/faq.php'>FAQs</a></li>
							<li><a class='firstlink supportlink <?php if($PageName!="faq.php" && $PageName!="buy.php" && $PageName!="download.php" && $PageName!="features.php" && $PageName!="index.php"  ) echo "selectedfirstlink"; ?>' href='<?php echo $DOMAIN;?>/support.php'>Support</a>
								<ul>
									<li><a class='secondlink' href='<?php echo $DOMAIN;?>/Guides/guides.php'>Guides</a></li>
									<li><a class='secondlink' href='<?php echo $DOMAIN;?>/BugTracker/'>Bugs</a></li>
									<li><a class='secondlink' href='<?php echo $DOMAIN;?>/contact.php'>Contact Us</a></li>
									<li><a class='secondlink' href='<?php echo $DOMAIN;?>/PackageManager/Packages.php'>Updates</a></li>
								</ul>
							</li>							
					</ul>	
				</div>
<?php				
	echo "
			</td>
		</tr>
	</table>
	
	</div>
	";

	
?>	

</div>

<?php
echo "
	<div id='DropDownMenu'>
		<div style='background-image: url(".$DOMAIN."/Resources/Header.png);'>
			<a><div style='width:160px;margin-left:auto;margin-right:auto;'><img alt='Arcade Cabinet Logo with text Photon Game Manager' title='Photon Software' src='".$DOMAIN."/Resources/TopTitleBar.png' style='width:100%;margin-top:18px;' /></div></a>	
			<img alt='menu icon' style='height:34px;margin-top:18px;margin-right:8px;position:absolute;right:0px;top:0px;' src='".$DOMAIN."/Resources/MenuIcon.png' />
		</div>
		<ul id='DropDownNav'>
			<li><a href='".$DOMAIN."/index.php#Home'>Home</a></li>
			<li><a href='".$DOMAIN."/index.php#Features'>Features</a></li>
			<li><a href='".$DOMAIN."/index.php#Download'>Download</a></li>	
			<li><a href='".$DOMAIN."/index.php#Buy'>Buy</a></li>	
			<li><a href='".$DOMAIN."/faq.php'>FAQs</a></li>
			<li><a href='".$DOMAIN."/support.php'>Support</a>
		</ul>			
	</div>
	
";
?>
</Nav>
<?php

$MetaDescription="Photon Game Manager offers our customers support via email, Facebook, bug tracker and in guides we have made.";
$MetaKeywords="Photon,Game,Manager,GameManager,PC,Email,facebook,guides,bug,tracker,updates";
$MetaTitle="Support - Photon";
$PageName="support.php";
include("Includes/Header.php");

?>
<Header>
<div class='TitleContainer'>
	<h1>Support</h1>
</div>
<p style='text-align:center;'>We mainly offer our customers support via email but you can also get support from our Facebook page, bug tracker and in the guides we have made.</p>
</Header>


<div class='HalfSupportContainer HalfSupportContainerLarge SupportContainer' style='margin-right: 2%;'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:84px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Mail.png' alt='Picture of an envelope' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>Contact Us</h2>
			<div>Via the form found on this page: <br/><a class='EmailLink' href='<?php echo $DOMAIN."/contact.php";?>'>Contact Us</a> </div>
		</div>
</div>

<div class='HalfSupportContainer HalfSupportContainerLarge SupportContainer'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:84px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Social.png' alt='Picture of a few people being sociable' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>Social Media</h2>
			<div style='margin-bottom:5px;'>Facebook: <a class='EmailLink' href='https://www.facebook.com/pages/Photon-Game-Manager/126858590746485?fref=ts&amp;ref=br_tf'>Photon Game Manager</a></div>
			<div style='margin-bottom:5px;'>Twitter: <a class='EmailLink' href='https://twitter.com/PhotonV4'>@PhotonV4</a></div>		
		</div>
</div>

<div class='SupportContainer'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:84px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Bug.png' alt='Picture of a bug' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>Bug Tracker</h2>
			<div>We keep a public bug tracker so anyone can report bugs, errors and faults with Photon to help us make Photon better for all our users.</div>
			<div class='SupportLink'>
				<a href='<?php echo $DOMAIN."/BugTracker/"?>'>Continue to BugTracker</a>
			</div>		
		</div>
</div>

<div class='SupportContainer'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:100px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Manual.png' alt='Picture of a book' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>Guides</h2>
			<div>Following the link you will find a selection of guides on various basic and advanced topics on and around Photon.</div>
			<div class='SupportLink'>
				<a href='<?php echo $DOMAIN."/Guides/guides.php"?>'>Continue to Guides</a>
			</div>		
		</div>
</div>

<div class='SupportContainer'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:100px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Update.png' alt='Picture of two arrows aligned in a circle to signify the word update' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>Updates</h2>
			<div>Although Photon comes with a built in update program we keep all updates available from our website so you can deploy updates to you offline installation of Photon or encase you wish to downgrade to a older version that worked better on your particular system.</div>
			<div class='SupportLink'>
				<a href='<?php echo $DOMAIN."/PackageManager/Packages.php"?>'>Continue to Updates</a>
			</div>		
		</div>
</div>


<?php

include("Includes/Footer.php");
?>
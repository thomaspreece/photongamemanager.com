<?php

$MetaDescription="Photon Game Manager is an advanced game launcher that is designed to make your game collection look amazing. It finds games automatically, downloads artwork and has many other gaming related features.";
$MetaKeywords="Photon,Game,Manager,GameManager,PC,download,software,windows,linux,organise,sort,games,play,patch";
$MetaTitle="Photon - Advanced game launcher for Windows & Linux";
$PageName="index.php";
include("Includes/Header.php");

if( isset($_REQUEST['Coupon'] )==1 ){
	if($_REQUEST['Coupon'] == ""){
		unset($_REQUEST['Coupon']);
		$Coupon = "";
	}else{
		$Coupon = $_REQUEST['Coupon'];
		$Coupon = preg_replace('/[^a-zA-Z0-9]/',"",$Coupon);
	}
}else{
	$Coupon = "";
}

$ValidCoupons = array(
    "Test"  => "0",
);

?>

<div class='HomeSliderMasterContainer'>
	<div class="HomeSlider">

		<div class='HomeSliderContainer'>
			<div class='HomeSliderContent' style='right:0px;'>
				<div class='HomeSliderVertical'>
					<div class='HomeSliderTitle'>All your games in one place</div>
					<p style='font-size:15px;text-align:center'>With Photon you can display and launch games from any platform and distribution system in a sleek and beautiful interface.</p>
				</div>
			</div>
			<img style='width:100%;' alt="Picture of Photon Game Manager's cover wall interface" src="Resources/Slider/Slider01.jpg" />
		</div>

		<div class='HomeSliderContainer'>
			<div class='HomeSliderContent' style='left:0px;'>
				<div class='HomeSliderVertical'>
					<div class='HomeSliderTitle'>Beautiful Interfaces</div>
					<p style='font-size:15px;text-align:center'>Photon comes with several different interfaces to make you game collection look amazing. Including a replacement for Games Explorer and a stunning full-screen interface.</p>
				</div>
			</div>
			<img style='width:100%;' alt="Picture of Photon Game Manager's cover flow interface" src="Resources/Slider/Slider02.jpg" />
		</div>

		<div class='HomeSliderContainer'>
			<div class='HomeSliderContent' style='right:0px;'>
				<div class='HomeSliderVertical'>
					<div class='HomeSliderTitle'>Easy to configure</div>
					<p style='font-size:15px;text-align:center'>With automatic game searching and artwork downloading features, all the hard work of managing your game collection is done for you.</p>
				</div>
			</div>
			<img style='width:100%;' alt="Picture of Photon Game Manager's configuration application" src="Resources/Slider/Slider03.jpg" />
		</div>

		<div class='HomeSliderContainer'>
			<div class='HomeSliderContent' style='left:0px;'>
				<div class='HomeSliderVertical'>
					<p style='font-size:15px;text-align:center;padding-bottom:5px;'>And many more features. <br/>Click below to see the full list of features</p>
					<div class='HomeSliderButton'><a class='IndexLink' href='<?php echo $DOMAIN;?>/index.php#Features'>View Features</a></div>

				</div>
			</div>
			<img style='width:100%;' alt="Picture of Photon Game Manager's banner flow interface" src="Resources/Slider/Slider05.jpg" />
		</div>

		<div class='HomeSliderContainer'>
			<div class='HomeSliderContent' style='right:0px;'>
				<div class='HomeSliderVertical'>
					<p style='font-size:15px;text-align:center;padding-bottom:5px;'>Why not try Photon today and see what you are missing?</p>
					<div class='HomeSliderButton'><a class='IndexLink' href='<?php echo $DOMAIN;?>/index.php#Download'>Download</a></div>

				</div>
			</div>
			<img style='width:100%;' alt="Picture of Photon Game Manager's info view interface"  src="Resources/Slider/Slider04.jpg" />
		</div>

	</div>
</div>

<a id='SwitchMenu'></a>
<Header>
<div class='TitleContainer'>
	<h1>About Photon</h1>
</div>

<p>Photon is an advanced game launcher and the product of many years hard work by Thomas Preece. It focuses on making your game collection look amazing and is designed to automate the process of downloading game art, game info, official patches, cheats, manuals and walkthroughs. It also has many gaming related features to make your life easier and to get the most out of your games.</p>
<p>Photon has 3 main parts. The first is a advanced configuration app that manages your game collection and features automated game searching and automatic Steam and Game Explorer import functions. The second is an immersive full-screen interface that really makes your game collection look beautiful. The final part is a windowed interface that was designed as a replacement for Windows Games Explorer but ended up being vastly superior to Games Explorer and equally as stunning as the full-screen interface.</p>
</Header>


<div style='height:15px;'></div>
<!--
<div class='DownloadLink'>
	<a href='<?php echo $DOMAIN?>/features.php'>Continue to features of Photon</a>
</div>
-->

<a id='Features'></a>
<div class='TitleContainer'>
	<h1>Features</h1>
</div>

<div class='FeatureContainer'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:70px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/HDD.png' alt='Hard disk drive containing all your games' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>A United Game Collection</h2>
			<div>No longer will you have to open up your game cupboard and load up steam, origin and any other distribution systems to see what games you own. With Photon you can keep all your games in one place by adding games from any distribution system and any gaming platform including games consoles such as the Gamecube and PS2.</div>
		</div>
</div>

<div class='FeatureContainer'>
		<div class='FeatureImageRight FeatureImageRightLarge'>
			<div style='width:100px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Monitor.png' alt='Monitor showing beautiful interfaces' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivRight FeatureDivRightLarge'>
			<h2>Beautifully Crafted Interfaces</h2>
			<div>Owning games isn't just about playing them. Show them off to your friends in the two gorgeous interfaces provided with Photon. The first is an immersive full-screen interface that really makes your collection look amazing and the second is a windowed interface that is a vastly superior to Windows Games Explorer. Both interfaces are highly customisable allowing you to make your collection look both unique and stunning.</div>
		</div>
</div>

<div class='FeatureContainer'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:100px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Launch.png' alt='A rocket that is launching' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>Launch Games Straight From The Interface</h2>
			<div>Photon isn't just about making your games look good, it's about launching and playing those games too. And with a large amount of features in Photon focused around launching and playing games you will find it even easier to get the most out of your games.</div>
		</div>
</div>

<div class='FeatureContainer'>
		<div class='FeatureImageRight FeatureImageRightLarge'>
			<div style='width:100px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Download.png' alt='A symbol signifying downloading' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivRight FeatureDivRightLarge'>
			<h2>Download Artwork</h2>
			<div>With built in support for online databases you can access a huge array of game information and artwork with ease. In particular our good friends over at thegamesdb.net have over 26,000 different game's information and artwork so you'll find it very hard to not automatically get your games information and dazzling artwork.</div>
		</div>
</div>

<div class='FeatureContainer'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:100px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Controller.png' alt='Controller'  style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>Controller, Joystick, Touch, Mouse and Keyboard Support</h2>
			<div>We want you to be able to use Photon no matter what input device you are using. At present we support touch screen control for devices such as Windows Surface tablets, controller and joystick support including Xbox 360 controllers and many others and your typical Mouse and Keyboard for those traditional PC gamers. Different input devices also have different menus (and on screen keyboards) to make it easier to navigate no matter what input device you are using.</div>
		</div>
</div>

<div class='FeatureContainer'>
		<div class='FeatureImageRight FeatureImageRightLarge'>
			<div style='width:100px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Manual.png' alt='A picture of a book' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivRight FeatureDivRightLarge'>
			<h2>Download Patches, Manuals, Cheats and Walkthroughs</h2>
			<div>Connecting to online databases, Photon can find and download updates for your old games, manuals, cheats and walkthroughs. </div>
		</div>
</div>

<div class='FeatureContainer'>
		<div class='FeatureImageLeft FeatureImageLeftLarge'>
			<div style='width:75px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Console.png' alt='A picture of a games console' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivLeft FeatureDivLeftLarge'>
			<h2>Emulator Support<sup> <a class='IndexLink' href="#Footnotes">1</a></sup></h2>
			<div>We know how much you loved your Sega Genesis and N64 that are now sitting in the attic. Photon supports emulators straight out the box allowing you to further unify your game collection and play those old classics of your childhood.</div>
		</div>
</div>

<div class='FeatureContainer'>
		<div class='FeatureImageRight FeatureImageRightLarge'>
			<div style='width:100px;margin-right:auto;margin-left:auto;'>
				<img src='Resources/Features/Advanced.png' alt='Picture of a computer terminal' style='max-width:100px;max-height:100px;'>
			</div>
		</div>
		<div class='FeatureDivRight FeatureDivRightLarge'>
			<h2>Advanced Features</h2>
			<div>We pride ourself in the vast amount of features Photon has, some of which may not be for everyone. Examples of some advanced features that people asked for that we added are:
			<ul>
			<li>AutoMount: allows Photon to work with programs such as Alcohol 120% to remove the need to have to insert game disks into your physical CD/DVD drive for those annoying games that require it</li>
			<li>PreRun and PostRun: allows you to run custom scripts or programs before and after your game runs</li>
			<li>Cabinet Mode: allows Photon to run again after your game finishes for a seamless transition between Photon and multiple games</li>
			<li>PowerPlan: allows laptop users to automatically change their power plan before and after playing games</li>
			</ul>
			</div>
		</div>
</div>










<a id='Download'></a>
<div class='TitleContainer'>
	<h1>Download Photon</h1>
</div>


<div style='height:25px;'></div>

<div class='DownloadContainer'>
<h2>Current Version (V4)</h2>

<p>You can find the most up to date version of Photon below. It is <b>free</b> to use with a database of 5 games or less and is a fully featured version of Photon other than that one restriction. If you wish to remove that restriction you will need to support me by <a href='<?php echo $DOMAIN."/buy.php"?>'>buying a license key</a>. As this download is the full featured version other than that one restriction, you can use it to try before you buy.</p>

<div class='DownloadLinkContainer'>
	<div class='DownloadLink' style='display:inline-block;'>
		<a class='DownloadLink' href='<?php echo $DOMAIN."/Downloads/PhotonV415.exe"?>'>Download for Windows</a>
	</div>
	<div class='DownloadLink' style='display:inline-block;'>
		<a class='DownloadLink' href='<?php echo $DOMAIN."/Downloads/GameManagerV4.06.tar.gz"?>'>Download for Linux (Experimental)</a><sup><a class='IndexLink' href="#Footnotes">2</a></sup>
	</div>
</div>
<div style='height:10px;'></div>
<a href='https://www.virustotal.com/en/file/e7f53d0e76291a73972fb31eae59897682cf6fabf417930a1d3a3ed74ffe377f/analysis/'>(Virus Scan of Windows Installer)</a><br/>
<div style='height:2px;'></div>
<a href='https://www.virustotal.com/en/file/e242a5036d8d35cac359ed8f50c53aa503bade38440233cd5e757ffbb8b4726b/analysis/'>(Virus Scan of Linux Installer)</a>



</div>

<div style='height:40px;'></div>





<a id='Buy'></a>
<div class='TitleContainer'>
	<h1>Buy Photon V4 License Key</h1>
</div>
<p>Photon is no longer available for purchase as I no longer have time to maintain the program. You may use the username: 'freeuser' and key: '2XHFK-EQK8K-G5LAH-83SG2' to unlock all features for free.</p>

<div style='height:30px;'></div>


<div class='TitleContainer'>
	<h1>Photon V4 Image Showcase</h1>
</div>
<div style='height:15px;'></div>
<div class='DownloadSliderMasterContainer'>
	<div class="DownloadSlider">

		<div class='DownloadSliderContainer'>
			<img src='<?php echo $DOMAIN;?>/Resources/PhotonV4/Picture05.jpg' alt="Photon Game Manager's Cover flow interface" >
		</div>

		<div class='DownloadSliderContainer'>
			<img src='<?php echo $DOMAIN;?>/Resources/PhotonV4/Picture06.jpg' alt="Photon Game Manager's Cover wall interface">
		</div>

		<div class='DownloadSliderContainer'>
			<img src='<?php echo $DOMAIN;?>/Resources/PhotonV4/Picture01.jpg' alt="Photon Game Manager's Cover slide interface">
		</div>

		<div class='DownloadSliderContainer'>
			<img src='<?php echo $DOMAIN;?>/Resources/PhotonV4/Picture15.jpg' alt="Photon Game Manager's Info view interface">
		</div>

		<div class='DownloadSliderContainer'>
			<img src='<?php echo $DOMAIN;?>/Resources/PhotonV4/Picture14.jpg' alt="Photon Game Manager's banner flow interface">
		</div>

		<div class='DownloadSliderContainer'>
			<img src='<?php echo $DOMAIN;?>/Resources/PhotonV4/Picture19.jpg' alt="Photon Game Manager's Explorer interface with front box art">
		</div>

		<div class='DownloadSliderContainer'>
			<img src='<?php echo $DOMAIN;?>/Resources/PhotonV4/Picture21.jpg' alt="Photon Game Manager's Explorer interface with banner art">
		</div>

	</div>
</div>


<div style='height:80px;'></div>

<div class='TitleContainer'>
	<h1>Support & FAQs</h1>
</div>
<div class='DownloadContainer'>
	<p>We mainly offer our customers support via email but you can also get support and information from our Facebook page, bug tracker, FAQs page and in the guides we have produced.</p>
	<div class='DownloadLink2'>
		<a href='<?php echo $DOMAIN."/support.php"?>'>Continue to Support Page</a>
	</div>
	<div class='DownloadLink2'>
		<a href='<?php echo $DOMAIN."/faq.php"?>'>Continue to FAQ Page</a>
	</div>
</div>

<div class='TitleContainer'>
	<h1>Old Photon Versions</h1>
</div>
<div class='DownloadContainer'>

<p>I have been developing this project over many years and over those years I have gone through a few complete code rewrites which I signified by changing version number of the software. If you would like to download one of these old versions please see the link below.</p>
<div class='DownloadLink2'>
	<a href='<?php echo $DOMAIN."/OldGameManagers.php"?>'>Download Old Versions</a>
</div>
</div>



<a id='Footnotes'></a>
<div class='TitleContainer'>

</div>

<ul style='list-style-type:decimal'>
<li>Different countries have different laws regarding emulators and their legality so I do not accept any responsible for any illegal activities committed by use of emulators by yourself or anyone else. If it is illegal in your country DO NOT use Photon with emulators. </li>
<li>The Linux version currently doesn't support all of the features listed in the Features section and you may experience crashes and bugs. </li>
</ul>


<?php

include("Includes/Footer.php");
?>

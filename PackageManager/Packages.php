<?php

$MetaDescription="Photon Game Manager is an advanced game launcher that is designed to make your game collection look amazing. This page contains updates for Photon.";
$MetaKeywords="Game,Manager,GameManager,PC,download,software,Photon,windows,linux,update,manual";
$MetaTitle="Updates - Photon";
$PageName="Packages.php";
include("../Includes/Header.php");

?>


<div class='TitleContainer'>
	<h1>Photon Updates</h1>
</div>

<div style='height:15px;'></div>

<div class='PackagesContainer'>
<h3>Stable Patches</h3>
Patches that have been tested extensively and have been released via the auto updater bundled with Photon
</div>

<table class='PackageTable' width='100%'>
<colgroup width='150px'></colgroup>
<colgroup width='100px'></colgroup>
<colgroup width='*'></colgroup>
<colgroup width='10px'></colgroup>
<colgroup width='*'></colgroup>
<tr>
	<td><b>Package Version</b></td>
	<td><b>Link</b></td>
	<td><b>Upgrade From</b></td>
	<td></td>
	<td><b>Major Changes</b></td>
</tr>
<tr>
	<td>4.03</td>
	<td><a href='V403.zip'>V403.zip</a></td>
	<td>4.02, 4.01, 4.00</td>
	<td></td>
	<td>-</td>
</tr>
<tr>
	<td>4.04</td>
	<td><a href='V404.zip'>V404.zip</a></td>
	<td>4.03</td>
	<td></td>
	<td>-</td>
</tr>
<tr>
	<td>4.05</td>
	<td><a href='V405.zip'>V405.zip</a></td>
	<td>4.04, 4.03</td>
	<td></td>
	<td>-</td>
</tr>
<tr>
	<td>4.06</td>
	<td><a href='V406.zip'>V406.zip</a></td>
	<td>4.05, 4.04, 4.03</td>
	<td></td>
	<td>-</td>
</tr>
<tr>
	<td>4.07</td>
	<td>-</td>
	<td>4.06, 4.05, 4.04, 4.03</td>
	<td></td>
	<td>Effectively the same package as 4.09</td>
</tr>
<tr>
	<td>4.08</td>
	<td>-</td>
	<td>4.07, 4.06, 4.05, 4.04, 4.03</td>
	<td></td>
	<td>This package is used to update PhotonUpdater when using PhotonUpdater to update.</td>
</tr>
<tr>
	<td>4.09</td>
	<td><a href='V409.zip'>V409.zip</a></td>
	<td>4.08, 4.07, 4.06, 4.05, 4.04, 4.03</td>
	<td></td>
	<td>Updated Steam Wizard, removed printing to console in non-debug mode</td>
</tr>
<tr>
	<td>4.10</td>
	<td><a href='V410.zip'>V410.zip</a></td>
	<td>4.09</td>
	<td></td>
	<td>Various updates see <a href='http://photongamemanager.com/BugTracker/changelog_page.php'>here</a> for changelog</td>
</tr>
<tr>
	<td>4.11</td>
	<td><a href='V411.zip'>V411.zip</a></td>
	<td>4.10</td>
	<td></td>
	<td>Fixed a slowdown issue in Patch 4.10</td>
</tr>
<tr>
	<td>4.12</td>
	<td><a href='V412.zip'>V412.zip</a></td>
	<td>4.09,4.10,4.11</td>
	<td></td>
	<td>Fixes bug in Downloader</td>
</tr>
<tr>
	<td>4.13</td>
	<td></td>
	<td>4.12</td>
	<td></td>
	<td>Broken Package (Unlucky number 13)</td>
</tr>
<tr>
	<td>4.14</td>
	<td><a href='V414.zip'>V414.zip</a></td>
	<td>4.12,4.13</td>
	<td></td>
	<td>Minor bug fix and stability update to PhotonUpdater</td>
</tr>
<tr>
	<td>4.15</td>
	<td><a href='V415.zip'>V415.zip</a></td>
	<td>4.14</td>
	<td></td>
	<td>See <a href='https://www.facebook.com/126858590746485/posts/798922030206801/'>facebook</a> for more details</td>
</tr>
</table>


<br/><br/>
<div class='PackagesContainer'>
<h3>Specific Patches</h3>
These are fully tested patches that are used for specific problems that a very small percentage of systems encounter. These shouldn't be used unless you have the specific problem listed
</div>
<table class='PackageTable' width='100%'>
<colgroup width='150px'></colgroup>
<colgroup width='200px'></colgroup>
<colgroup width='*'></colgroup>
<tr>
	<td><b>Fix</b></td>
	<td><b>Link</b></td>
	<td><b>Notes</b></td>
</tr>
<tr>
	<td>Downloader Fail</td>
	<td><a href='DownloaderPatch.zip'>DownloaderPatch.zip</a></td>
	<td>Fixes problem with downloader not downloading any data. For versions above 4.06(inclusive) </td>
</tr>

<tr>
	<td>Force Log Output</td>
	<td><a href='DebugLog.txt'>DebugLog.txt</a></td>
	<td>Stick file in GameManager Program Directory and the programs will output data to the Log folder (right-click -> save link as)</td>
</tr>

</table>

<br/><br/>
<div class='PackagesContainer'>
<h3>Experimental/Unstable Patches</h3>
Patches that are currently being worked on and tested but have yet to be fully tested.
</div>
<table class='PackageTable' width='100%'>
<colgroup width='150px'></colgroup>
<colgroup width='200px'></colgroup>
<colgroup width='*'></colgroup>
<tr>
	<td><b>Fix</b></td>
	<td><b>Link</b></td>
	<td><b>Notes</b></td>
</tr>

<tr>
	<td colspan='3' style='text-align:left;'>None available at this present time</td>
</tr>
</table>

<?php

include("../Includes/Footer.php");
?>
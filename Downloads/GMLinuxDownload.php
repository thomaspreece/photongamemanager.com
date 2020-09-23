<?php

$MetaDescription="";
$MetaKeywords="";
$MetaTitle="Photon GameManager V4 Linux Download";
$PageName="TempGM.php";
include("../Includes/Header.php");


echo "
This is an experimental version and may be very buggy, if you have any problems please tell <a href='".$DOMAIN."/support.php'>Customer Support</a><br/><br/>

Tested on Ubuntu 12.04 32bit and Ubuntu 13.04 64bit.<br/>
Required Libraries for 32bit:
<ul>
<li>libtiff4</li>
</ul>
<br/><br/>
Required Libraries for 64bit:
<ul>
<li>ia32-libs</li>
<li>libtiff4:i386</li>
</ul>
<br/><br/>
(To get libraries on Ubuntu use 'sudo apt-get install [library name]' E.g. 'sudo apt-get install ia32-libs')<br/><br/>
 
<a href='GameManagerV4.06.tar.gz'>Download Link</a><br/><br/>

As you can tell, I don't know too much about Linux and have stepped in at the deep end. If you can tell <a href='".$DOMAIN."/support.php'>Customer Support</a> whether it works on your distribution and what libraries it requires I'll be very grateful. 
";

include("../Includes/Footer.php");
?>
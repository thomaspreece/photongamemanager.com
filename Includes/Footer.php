<?php



echo "
	</div>
	<div style='height:30px'></div>
";			

echo "




	</div>

</div>

<Footer>
<div id='FooterBanner' style='background-image: url(".$DOMAIN."/Resources/Footer.png);' >
	<div style='max-width:1024px;height:25px;margin-left:auto;margin-right:auto;color: white;'>
		<div style='float: left;margin-left:15px; padding:5px;'>Copyright 2012-".date("Y")."</div>
		<div style='float: right;margin-right:15px; padding:5px;'>Produced by: <a style='color:white;' href='http://thomaspreece.com'>Thomas Preece</a></div>
	</div>
</div>
</Footer>

";
//Page Specific JS
if($PageName == "faq.php"){
echo "
<script type='text/javascript'>
$('.FAQLink').click(function (event) {
    event.preventDefault();
    //calculate destination place
    var dest = 0;
    if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
        dest = $(document).height() - $(window).height();
    } else {
        dest = $(this.hash).offset().top - 90;
    }
    //go to destination
    $('html,body').animate({
        scrollTop: dest
    }, 1000, 'swing');
});
$('.FAQLinkTop').click(function (event) {
    event.preventDefault();
    //calculate destination place
    var dest = 0;
    //go to destination
    $('html,body').animate({
        scrollTop: dest
    }, 1000, 'swing');
});
</script>
";
}elseif($PageName == "Emulators.php"){
echo "
<script type='text/javascript'>
$('.EmulatorLink').click(function (event) {
    event.preventDefault();
    //calculate destination place
    var dest = 0;
    if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
        dest = $(document).height() - $(window).height();
    } else {
        dest = $(this.hash).offset().top - 90;
    }

    //go to destination
    $('html,body').animate({
        scrollTop: dest
    }, 1000, 'swing');
});
$('.EmulatorLinkTop').click(function (event) {
    event.preventDefault();
    //calculate destination place
    var dest = 0;
    //go to destination
    $('html,body').animate({
        scrollTop: dest
    }, 1000, 'swing');
});
</script>
";	
}elseif($PageName == "index.php"){
echo "
<script type='text/javascript'>
$('.IndexLink').click(function (event) {
    event.preventDefault();
    //calculate destination place
    var dest = 0;
    if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
        dest = $(document).height() - $(window).height();
    } else {
        dest = $(this.hash).offset().top - 60;
    }

    //go to destination
    $('html,body').animate({
        scrollTop: dest
    }, 1000, 'swing');
});

$('.IndexLinkTop').click(function (event) {
    event.preventDefault();
    //calculate destination place
    var dest = 0;
    //go to destination
    $('html,body').animate({
        scrollTop: dest
    }, 1000, 'swing');
});

$('.HomeSlider').anyslider({
interval: 12000,
showControls: true,
showBullets: false
});

$('.DownloadSlider').anyslider({
interval: 0,
showControls: true,
showBullets: true
});
</script>
";	
}elseif($PageName == "OldGameManagers.php"){
	
echo "
<script type='text/javascript'>
$('.OldGMSlider').anyslider({
interval: 7000,
showControls: false,
showBullets: true
});
</script>	
";

}





?>



</div>

<!-- STAT COUNTER -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62676753-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- STAT COUNTER END -->

</body>

</html>




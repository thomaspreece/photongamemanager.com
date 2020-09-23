<?php

//Load JS
echo "
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
<script src=\"".$DOMAIN.auto_version('/scripts/jquery.anyslider.min.js')."\"></script>
";

//Resize JS Functions
echo "
<script type='text/javascript'>
	
	var resizeTimer = null;
	var scrollTimer = null;

	$( document ).ready(handleResize);

	$(window).resize(function () {
		if (resizeTimer) {
			clearTimeout(resizeTimer);   // clear any previous pending timer
		}
		resizeTimer = setTimeout(handleResize, 200);   // set new timer
	});

	$(window).scroll(function() {
		if (scrollTimer == null){
			scrollTimer = setTimeout(handleScroll, 100);	
		}	
	});
		
	function handleResize(){
		var cw2 = $('#PageDiv').width();
		if(cw2 < 850){
			$('#MainMenu').css({ 'display': 'none' }); 
			$('#DropDownMenu').css({ 'display': 'block' }); 
			$('#MenuGap').css('height','25px');
			$('.HomeSliderMasterContainer').css('display','none')
			
			$('.FeatureImageLeft').toggleClass('FeatureImageLeftLarge',false)
			$('.FeatureImageRight').toggleClass('FeatureImageRightLarge',false)
			
			$('.FeatureDivLeft').toggleClass('FeatureDivLeftLarge',false)
			$('.FeatureDivRight').toggleClass('FeatureDivRightLarge',false)					
			
			
		}else{
			$('#MainMenu').css({ 'display': 'block' }); 
			$('#DropDownMenu').css({ 'display': 'none' }); 
			$('#MenuGap').css('height','65px');
			$('.HomeSliderMasterContainer').css('display','block')
			
			$('.FeatureImageLeft').toggleClass('FeatureImageLeftLarge',true)
			$('.FeatureImageRight').toggleClass('FeatureImageRightLarge',true)
			
			$('.FeatureDivLeft').toggleClass('FeatureDivLeftLarge',true)
			$('.FeatureDivRight').toggleClass('FeatureDivRightLarge',true)					
		}
		
		
		if(cw2 < 900){
			$('.PayPalContainer').toggleClass('PayPalContainerLarge',false)		
			$('.HalfSupportContainer').toggleClass('HalfSupportContainerLarge',false)	
		}else{
			$('.PayPalContainer').toggleClass('PayPalContainerLarge',true)
			$('.HalfSupportContainer').toggleClass('HalfSupportContainerLarge',true)	
		}
		
		
		
	}

	function handleScroll(){
		scrollTimer = null;
		var AboutH = 500, CurrentH = $(this).scrollTop()
	";
if($PageName == "index.php"){
echo "
		var FeatureH =  $('#Features').offset().top - 70 , DownloadH = $('#Download').offset().top - 70 , BuyH = $('#Buy').offset().top - 70, BottomH = $('#BodyMiddle').innerHeight() - $(window).height()
		
		if( BottomH < CurrentH || BuyH < CurrentH){
			$('#FeatureSectionLink').toggleClass('selectedfirstlink',false)	
			$('#DownloadSectionLink').toggleClass('selectedfirstlink',false)			
			$('#BuySectionLink').toggleClass('selectedfirstlink',true)		
		}else if(DownloadH < CurrentH){			
			$('#FeatureSectionLink').toggleClass('selectedfirstlink',false)	
			$('#DownloadSectionLink').toggleClass('selectedfirstlink',true)				
			$('#BuySectionLink').toggleClass('selectedfirstlink',false)				
		}else if(FeatureH < CurrentH){
			$('#FeatureSectionLink').toggleClass('selectedfirstlink',true)			
			$('#DownloadSectionLink').toggleClass('selectedfirstlink',false)	
			$('#BuySectionLink').toggleClass('selectedfirstlink',false)			
		}else{
			$('#FeatureSectionLink').toggleClass('selectedfirstlink',false)	
			$('#DownloadSectionLink').toggleClass('selectedfirstlink',false)	
			$('#BuySectionLink').toggleClass('selectedfirstlink',false)	
		}	
";}
		
echo "
		if($('#MainMenu').css('display') == 'block'){
			if(CurrentH > AboutH){
					$('#LogoDiv').animate({width:'140px','margin-left':'40px','margin-right':'40px'},100,function(){
						$('#Logo').attr('src','".$DOMAIN."/Resources/TopTitleBar-Small.png')
					})
					$('#MainMenu').animate({height:'50px'}, 100)
					$('.firstlink').animate({height:'44px','line-height':'49px'}, 100)
					$('#MainMenuNav li ul').css('top','49px')
			}else{
					$('#LogoDiv').animate({width:'180px','margin-left':'20px','margin-right':'20px'},100,function(){
							$('#Logo').attr('src','".$DOMAIN."/Resources/TopTitleBar.png')
					})
					$('#MainMenu').animate({height:'70px'}, 100)
					$('.firstlink').animate({height:'64px','line-height':'69px'}, 100)	
					$('#MainMenuNav li ul').css('top','69px')				
			}
		}
	}
</script>
";

?>

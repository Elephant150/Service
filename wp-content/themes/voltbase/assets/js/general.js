// JavaScript Document
jQuery(document).ready(function() {
	
	var voltbaseViewPortWidth = '',
		voltbaseViewPortHeight = '';

	function voltbaseViewport(){

		voltbaseViewPortWidth = jQuery(window).width(),
		voltbaseViewPortHeight = jQuery(window).outerHeight(true);	
		
		if( voltbaseViewPortWidth > 1200 ){
			
			jQuery('.main-navigation').removeAttr('style');
			
			var voltbaseSiteHeaderHeight = jQuery('.site-header').outerHeight();
			var voltbaseSiteHeaderWidth = jQuery('.site-header').width();
			var voltbaseSiteHeaderPadding = ( voltbaseSiteHeaderWidth * 2 )/100;
			var voltbaseMenuHeight = jQuery('.menu-container').height();
			
			var voltbaseMenuButtonsHeight = jQuery('.site-buttons').height();
			
			var voltbaseMenuPadding = ( voltbaseSiteHeaderHeight - ( (voltbaseSiteHeaderPadding * 2) + voltbaseMenuHeight ) )/2;
			var voltbaseMenuButtonsPadding = ( voltbaseSiteHeaderHeight - ( (voltbaseSiteHeaderPadding * 2) + voltbaseMenuButtonsHeight ) )/2;
		
			
			jQuery('.menu-container').css({'padding-top':voltbaseMenuPadding});
			jQuery('.site-buttons').css({'padding-top':voltbaseMenuButtonsPadding});
			
		}else{

			jQuery('.menu-container, .site-buttons').removeAttr('style');

		}	
	
	}

	jQuery(window).on("resize",function(){
		
		voltbaseViewport();
		
	});
	
	voltbaseViewport();
	
	jQuery('.site-branding .search-button').on('click', function(){
		
		if( voltbaseViewPortWidth > 1200 ){

			jQuery('.fullSearchContainer').css({'height':voltbaseSiteHeaderHeight,'position':'fixed','top':'0','left':'0'}).fadeIn(500);
		
		}else{
			jQuery('.main-navigation').slideToggle();
		}	
		
				
	});

	jQuery('.site-branding .menu-button').on('click', function(){
				
		if( voltbaseViewPortWidth > 1200 ){

		}else{
			jQuery('.main-navigation').slideToggle();
		}				
		
				
	});	

	jQuery('.site-branding .account-button').on('click', function(){
		
		if( voltbaseViewPortWidth > 1200 ){

		}else{
			jQuery('.main-navigation').slideToggle();
		}		
				
	});

	jQuery('.site-buttons .search-button').on('click', function(){

		if( voltbaseViewPortWidth > 1200 ){

		
			jQuery('.fullSearchContainer').css({'height':voltbaseViewPortHeight,'position':'fixed','top':'0','left':'0','z-index':'99'}).fadeIn(500, function(){
				
				var fullSearchContainerHeight = jQuery('.fullSearchFieldContainer').height();
				var fullSearchContainerPadding = ( voltbaseViewPortHeight - fullSearchContainerHeight ) / 2;
			
			
				jQuery('.fullSearchFieldContainer').css({'padding-top':fullSearchContainerPadding}).fadeIn(1000);				
				
			});
		
		}else{
			
		}	
		
				
	});	
	
	jQuery('.fullSearchContainerClose').on('click', function(){
		
		if( voltbaseViewPortWidth > 1200 ){

			jQuery('.fullSearchContainer').fadeOut(1000, function(){
				jQuery('.fullSearchContainer, .fullSearchFieldContainer').removeAttr('style');
			});
		
		}else{
			
		}	
		
				
	});		
	
});		

$(function() {
	$('#wrapper').removeClass('no-js');
	
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

	var jumpTo = getParameterByName("jumpto");
	if (jumpTo.length > 0) {
		var destination = $("#" + jumpTo).offset().top - 50;
		$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination},(destination + 2500) * .3);
	}
	
	//Footer
	$('#footer-locate div input').focus(function() {
		$('#footer-locate div label').addClass('hidden');
	}).blur(function() {
		if ($.trim($(this).val()) == "") {
			$('#footer-locate div label').removeClass('hidden');
		}
	});
	
	//Flash logo
	var flashvars = {};
	var params = {}; 
	params.menu = "false"; 
	params.wmode = "transparent"; 
	params.scale = "true";
	params.play = "true"; 
	params.loop = "true"; 
	var attributes = {};
	swfobject.embedSWF("/wp-content/themes/kftea/images/kftea-logo-180x136", "static-logo", "100%", "100%", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
	
	//Navigation
	$('#menu-primary-navigation li:first').addClass('first');
	$('#menu-primary-navigation li:last').addClass('last');
	$('#menu-primary-navigation li:eq(3)').addClass('middle');
	$('#nav-toggle').click(function() {
		if ($('#nav ul').is(":hidden")) {
			$('#nav ul').slideDown();
		} else {
			$('#nav ul').slideUp(function() { $(this).removeAttr('style'); });
		}
	});
	
	//Search
	$('#searchForm').submit(function() {
		$('.map-results').addClass('show-map');
	});
	$('#footer-locate').submit(function() {
		var inputval = $('#txtZipCode').val();
		$('#addressInput').val(inputval);
		
		$('#searchForm').submit();
		return false;
	});
	
	//Menu Tables
	$('.menu-tbl tbody').each(function() {
		$(this).find('tr:even').addClass('even');
	});
	$('.location-tbl tbody').each(function() {
		$(this).find('tr:even').addClass('even');
	});
	$('.location-tbl tbody tr').each(function() {
		$(this).find('th:eq(0)').addClass('mobile-hidden');
		$(this).find('td:eq(0)').addClass('mobile-hidden');
	});
	
	//Product Description popup
	$('.desc-btn').on("click", function(e) {
		var descDiv = $(this).parent().find('.product-description');
		if (descDiv.css('display') == "block") {
			descDiv.fadeOut();
			$(this).parent().removeClass('desc-open');
		} else {
			$('.desc-open').removeClass('desc-open').find('.product-description').fadeOut();
			descDiv.fadeIn();
			$(this).parent().addClass('desc-open');
		}
		
		e.preventDefault();
	});
	
	$(document).on("click", function(e) {
		var clicked = $(e.target);
		if(!clicked.parents().hasClass('desc-open')){
			$('.desc-open').removeClass('desc-open').find('.product-description').fadeOut();
		}
	});
});
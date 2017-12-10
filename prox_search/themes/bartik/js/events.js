//events.js

jQuery(function($){
	
	$(document).ready(function(){
		$('table').attr('id','EventTable');
		
		//$('td:nth-child(6),th:nth-child(6)').hide();
		//$('td:nth-child(4),th:nth-child(4)').hide();
		//$('td:nth-child(5),th:nth-child(5)').hide();
		//$("span:contains('Event Name')").hide();
		//alert($("#gmap_info .views-label-title").html());
		
		
		
	});
	$(document).load(function(){
		
			alert($("#gmap_info .views-label-title").html());
		
	});
});

(function ($) {
	Drupal.behaviors.gmap = {
        attach: function (context, settings) {
			alert("test");
                // add actions in each views row. You can change that if you use other views format
		$("#EventTable tbody tr").each(function(i){
			$(this).click(function(){
			timerID = setInterval(function() {
				window.scrollBy(0, -100);
			
				if( window.pageYOffset < 330 )
					clearInterval(timerID);
			}, 13);
			alert("hi");
			
			var newi = i; // marker[i] start from "0" but .views-row from "1"
          
			$(this).bind('mouseover', function(){
			GEvent.trigger(Drupal.settings.gmap.auto1map.markers[newi].marker, 'mouseover');
			return false;
			});

			$(this).bind('mouseout', function(){
			GEvent.trigger(Drupal.settings.gmap.auto1map.markers[newi].marker, 'mouseout');
			return false;
			});
			});

		});
	}
	};
	
	
})(jQuery);
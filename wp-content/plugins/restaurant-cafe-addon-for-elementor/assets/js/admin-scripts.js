(function( $ ) {
 
    "use strict";
     
    //repeatable main method
	$('.narep-extend-fields-wrap').each(function() {
		$(this).repeatable_fields({
			wrapper: '.widget-wrapper',
            container: '.widget-container',
            row: '.widget-row',
            add: '.narep-extend-fields-add',
            remove: '.narep-extend-fields-remove',
            move: '.narep-extend-fields-move',
            template: '.template',
            is_sortable: true
		});
	});

	//toggle repeated fields
	$(document).on('click', '.narep-extend-field-action', function(e){
		e.preventDefault();
		$(this).parents('.widget').toggleClass('close open').find('.widget-inside').slideToggle('fast');
	});

	//Action buttons of repeated fields
	$(document).on('click', '.narep-extend-fields-remove', function(e){ e.preventDefault(); });
	$('.narep-extend-fields-add').on('click', function(e){ e.preventDefault(); });

	$(document).on('keyup contextmenu input', '.narep-extend-title', function(){
		var $this = $(this);
		$this.parents('.widget').find('.widget-title h3').text($this.val());
	});

	$(document).on('keyup contextmenu input', 'input.wc_input_price', function(){
		var $this = $(this);
		var $price = $this.val();
		$('input.wc_input_price_for_gift').attr('value', $price);
	});
 
})(jQuery);
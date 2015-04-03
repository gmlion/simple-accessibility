/**
 * @author Gianmarco Leone
 */

jQuery(document).ready( function() {
    jQuery('#highContrast a').click( function() {
    	jQuery('body').addClass('high-contrast');
	});
	jQuery('#normalContrast a').click( function() {
    	jQuery('body').removeClass('high-contrast');
	});
	jQuery('#moreSize a').click( function() {
    	jQuery('body').addClass('zoom');
	});
	jQuery('#defaultSize a').click( function() {
    	jQuery('body').removeClass('zoom');
	});
});

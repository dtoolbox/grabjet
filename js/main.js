var Grab = {
    init : function() {
    	this.initCommon();
    },
    initCommon : function() {

        $('#grabjet-add-ons').multiselect({
        	buttonWidth: '100%',
            buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'Choose Add-ons';
                }
                else if (options.length === 1) {
                     var labels = [];
                     options.each(function() {
                         if ($(this).attr('label') !== undefined) {
                             labels.push($(this).attr('label'));
                         }
                         else {
                             labels.push($(this).html());
                         }
                     });
                     return labels.join(', ') + '';
                 }
                else if (options.length === 2) {
                    return '2 Selected';
                }
                else if (options.length === 3) {
                    return '3 Selected';
                }
                else {
                	return 'All Selected';
                }
            },
            onChange: function(element, checked) {
                console.log(element.val());
                var displayprice = $('#total-price').text();
                var item_value = element.val().substr(2);
                if (checked === true) {
                	$('#total-price').text(parseInt(displayprice)+parseInt(item_value));
                }
                else {
                	$('#total-price').text(parseInt(displayprice)-parseInt(item_value));
                }
            }
        });
        
        $('#datetimepicker').datetimepicker({
        	format: 'Do MMMM YYYY'
        });
        
    }
};


$(document).ready(function() { Grab.init(); });

// $(window).bind('scroll', function(){ });

// $(window).resize(function() { });

// $(window).load(function() { });

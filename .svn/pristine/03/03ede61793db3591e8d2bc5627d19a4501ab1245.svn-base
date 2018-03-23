$(document).ready(function () {

	// -----------------------------------------------------------------
    // Form field focus
    // -----------------------------------------------------------------
    $(":input").each(function(){
        $(this).focus(function(){
            $(".input").removeClass('focus');
            $(this).parent(".input").addClass('focus');
        });
		$(this).keydown(function(){
			$(this).parent(".input").removeClass("error-focus");
		});
		$(this).change(function(){
			$(this).parent(".input").removeClass("error-focus");
		});
    });
	
	// -----------------------------------------------------------------
    // Placeholder for legacy browsers
    // -----------------------------------------------------------------
    $('input[type="text"][placeholder], textarea[placeholder]').each(function () {
        var obj = $(this);

        if (obj.attr('placeholder') != '') {
            obj.addClass('IePlaceHolder');

            if ($.trim(obj.val()) == '' && obj.attr('type') != 'password') {
                obj.val(obj.attr('placeholder'));
            }
        }
    });
    $('.IePlaceHolder').focus(function () {
        var obj = $(this);
        if (obj.val() == obj.attr('placeholder')) {
            obj.val('');
        }
    });
    $('.IePlaceHolder').blur(function () {
        var obj = $(this);
        if ($.trim(obj.val()) == '') {
            obj.val(obj.attr('placeholder'));
        }
    });
	
    // -----------------------------------------------------------------
    // Pop Up Script
    // -----------------------------------------------------------------
    $(".pop").click(function(){
        $("#background-overlay").fadeIn(300);
    });
    $(".close").click(function(){
        $("#background-overlay").fadeOut(300);
        return false;
    });
	
	// -----------------------------------------------------------------
    // Custom Checkbox Script
    // -----------------------------------------------------------------
	$(".chk-box").each(function(){
        $(this).click(function(){
            if($(this).hasClass("active")){
                // remove active class and uncheck it
                $(this).removeClass("active");
                $(this).css("background","#ffffff");
            } else {
                // add active class and check it
                $(this).addClass("active");
                $(this).css("background","#a21c1c");
            }
        });
    });
	
});
jQuery(function(e){e("a.open-form").on("click",function(){e("body").toggleClass("dialogIsOpen")});e("body").on("keyup",function(t){if(t.keyCode===27){e("body").removeClass("dialogIsOpen");return!1}});e(".overlay").on("click",function(){e("body").removeClass("dialogIsOpen")})});
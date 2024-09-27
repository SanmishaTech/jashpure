$(function () {
    'use strict'

    $("#title").on("change", function() { 
        $("#page_title").val($(this).val());
    });
}); 

function tinymceChange(e) {    
    console.log("The HTML is now:" + e.getBody().innerHTML);
}

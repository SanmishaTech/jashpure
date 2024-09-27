$(function () {
    'use strict'

    $("#protocol").on("change", function() { 
        $("#divMailPath").hide();
        $("#divSMTP").hide();

        if($(this).val() == 'sendmail') {
            $("#divMailPath").show();
        } else if($(this).val() == 'smtp') {
            $("#divSMTP").show();
        }
    });

    $("#protocol").trigger("change");    
});  
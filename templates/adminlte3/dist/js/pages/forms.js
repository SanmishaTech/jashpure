//http://camohub.github.io/jquery-sortable-lists/index.htmlhttp://camohub.github.io/jquery-sortable-lists/index.html

$(function () {
    'use strict'

    $("#add-field").on("click", function() {
        var field = $("#field").val();
        var validations = $("#validations").val();
        if(field == '') { return false };

        var html = `
            <tr id="tr${index}">
                <td><input type="text" name="form_fields[${index}][field]" value="${field}" class="form-control"></td>
                <td><input type="text" name="form_fields[${index}][validations]" value="${validations}" class="form-control"></td>
            </tr>        
        `;

        index++;

        $("#fields-table tbody").append(html);

        $("#field").val('');
        $("#validations").val('');        
    });

    $("a.deleteMenu").on("click", function() {
        if(confirm("Delete Menu Item ?")) {
            $(this).closest('li').remove();
        }
        var ol = $("#sTree2").sortableListsToHierarchy();
        $("#menu_items").val(JSON.stringify(ol));        
    });
});  
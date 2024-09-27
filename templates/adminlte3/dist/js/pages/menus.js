//http://camohub.github.io/jquery-sortable-lists/index.htmlhttp://camohub.github.io/jquery-sortable-lists/index.html

$(function () {
    'use strict'

    var options = {
        opener: {
            active: true,
            as: 'html',  // or "class"
            close: '<i class="fa fa-minus"></i>', // or 'fa fa-minus'
            open: '<i class="fa fa-plus"></i>', // or 'fa fa-plus'
            openerCss: {
                'display': 'inline-block', // Default value
                'float': 'left', // Default value
                'width': '18px',
                'height': '18px',
                'margin-left': '-35px',
                'margin-right': '5px',
                'background-position': 'center center', // Default value
                'background-repeat': 'no-repeat' // Default value
            },
            // or like a class. Note that class can not rewrite default values.
            // To rewrite defaults you have to do it through css object.
            // openerClass: 'your-class-name',
        },
        insertZonePlus: true,
        maxLevels: 3,
        ignoreClass: 'clickable',
        complete: function( cEl ) { 
            var ol = $("#sTree2").sortableListsToHierarchy();
            $("#menu_items").val(JSON.stringify(ol));
            return true;
        }
    }

    $("#sTree2").sortableLists(options); 

    $("#add-menu").on("click", function() {
        menuIndex++;
        var value = $("#menu_name").val();
        var slug = slugify($("#menu_name").val());
        if($("#menu_item").val() == "\\Webly\\Core\\Controllers\\PagesController::display/1") {
            slug = "/";
        }        
        var route = $("#menu_item").val();
        $("#sTree2").append(`
            <li class="bgC4" id="item_${menuIndex}" data-value="${value}" data-slug="${slug}" data-route="${route}">
                <div>${value}</div>
            </li>        
        `);

        $("#sTree2").sortableLists(options); 
        
        var ol = $("#sTree2").sortableListsToHierarchy();
        $("#menu_items").val(JSON.stringify(ol));        
    });

    $("a.deleteMenu").on("click", function() {
        if(confirm("Delete Menu Item ?")) {
            $(this).closest('li').remove();
        }
        var ol = $("#sTree2").sortableListsToHierarchy();
        $("#menu_items").val(JSON.stringify(ol));        
    });

    $("#frm").on("submit", function() {
        var ol = $("#sTree2").sortableListsToHierarchy();
        $("#menu_items").val(JSON.stringify(ol));        
        return true;
    });
});  
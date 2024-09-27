//http://camohub.github.io/jquery-sortable-lists/index.htmlhttp://camohub.github.io/jquery-sortable-lists/index.html

$(function () {
    'use strict'

    $(function() {
        $( "tbody" ).sortable({
            axis: 'y',
            update: function (event, ui) {
                var sorted = $(this).sortable('toArray');
                $.post('/admin/banners/sort', {sorted});
            }            
        });
    });
});  
$(function () {
    'use strict'

    if(typeof tinymce !== "undefined") {
        tinymce.init({
            selector: 'textarea.tinymce',
            menubar: false,
            plugins: 'lists link image media table code responsivefilemanager',
            toolbar1: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | responsivefilemanager image link media | table | code',
            image_advtab: true,
            external_filemanager_path:"/filemanager/",
            filemanager_title:"Webly CMS Filemanager" ,
            external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},
            filemanager_access_key:"sA91nMi4sHa" ,
            height : "380"
        });
    }

    if(typeof bsCustomFileInput !== "undefined") {
        bsCustomFileInput.init();
    }

    $(".delete").on("click", function() {
        return confirm("Delete ?"); 
    });

});    
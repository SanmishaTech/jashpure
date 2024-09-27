//http://camohub.github.io/jquery-sortable-lists/index.htmlhttp://camohub.github.io/jquery-sortable-lists/index.html

$(function () {
    'use strict'
    $(function() {
        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)


        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/admin/albums/upload", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: true, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("album_id", album_id);
                });

                this.on("sending", function(file){
                    document.querySelector("#total-progress").style.opacity = "1"
                });

                this.on("queuecomplete", function(progress){

                });
            }
        });
        
        $( "tbody" ).sortable({
            axis: 'y',
            update: function (event, ui) {
                var sorted = $(this).sortable('toArray');
                $.post('/admin/albums/image_sort', {sorted});
            }            
        });
    });
});  
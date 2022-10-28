// MCV6 Global
if (typeof MCV6 == "undefined" || !MCV6) {
    var MCV6 = {};
}

MCV6.admin = {
    gallery: {
        init: function(){
            $(".sortable").sortable({
                stop: function(event, ui) {
                    // After sorting has finished, update all the gallery_order inputs
                    $("ul.photos input.gallery_order").each(function(index) {
                        $(this).val(index + 1);
                    });
                }
            });
        }
    },
    photo_index: {
        init: function() {
             $("form#gallery-filter select.gallery").change(function() {
                if ($("form#gallery-filter select.gallery").val() == "all") {
                    window.location.replace("/admin");
                }
                else {
                    $("form#gallery-filter").submit();
                }
            });
        }
    }
}


$(document).ready(function(){
    MCV6.admin.gallery.init();
    MCV6.admin.photo_index.init();
});
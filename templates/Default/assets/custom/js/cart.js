$(document).ready(function(){
    $(".qty-spinner").inputSpinner();

    $(".qty-spinner").on("change", function() {
        data = $(this).closest("form").serializeArray();
        product_id = data[0].value;
        qty = data[1].value;

        if(qty > 0) {
            $.post(
                '/shop/add_to_cart',
                $(this).closest("form").serialize(),
            ).done(function(data){
                $(".cart_count").html(data.cart_count);
                $("#msg").text(data.message);
    
                // $.fancybox.open({
                //     src: "#modalBox"
                // });
        
            });
        } else {
			//x = confirm("Do you want remove this product from cart ?");
            if(true) {
                $.get(
                    '/shop/delete_from_cart/' + product_id,
                ).done(function(data){
                    $(".cart_count").html(data.cart_count);
                    $(".total_amount").html(data.total_amount);
                });
                $('#tr_' + $(this).attr('rel')).remove();                
                //alert('Product is removed from Cart');
            }            
        }
    }); 


    $(".frm").on("submit", function(e){
        $.post(
            '/shop/add_to_cart',
            $(this).serialize(),
        ).done(function(data){
            $(".cart_count").html(data.cart_count);
            $("#msg").text(data.message);

            $.fancybox.open({
                src: "#modalBox"
            });
    
        });
        e.preventDefault();
    });

    $("#closeButton").on("click", function() {
        $.fancybox.close();
        return false;
    });

    $(".delete_from_cart").on("click", function(e){
        if(confirm("Do you want remove this product from cart ?")) {
            $.get(
                '/shop/delete_from_cart/' + $(this).attr('rel'),
            ).done(function(data){
                $(".cart_count").html(data.cart_count);
                $(".total_amount").html(data.total_amount);
            });
            $('#tr_' + $(this).attr('rel')).remove();                
        }
        return false;
    });    
});

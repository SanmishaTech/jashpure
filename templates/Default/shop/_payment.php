<html>
<head>
<title>Non-Seamless-kit</title>
</head>
<body>
<?php 
	error_reporting(0);
	
	$merchant_data='';

	// $working_key='737471896E5DBDC30FE23B000EC9ACF9';
	// $access_code='AVXE05LB56CF24EXFC';

    // $url = "https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction";
    // $return_url = "http://localhost:8080/orders/response";

	$working_key='EE0BF4F30ED87EFADC37339049254F9F';
	$access_code='AVLH64LB20BS13HLSB';

    $url = "https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction";
    $return_url = "https://jashpure.com/orders/response";


    $merchant_data .= 'merchant_id=3314154&';
    $merchant_data .= 'order_id=' . $order->id . '&';
    $merchant_data .= 'amount=' . $order->net_amount . '&';
    $merchant_data .= 'currency=' . 'INR' . '&';
    $merchant_data .= 'redirect_url=' . $return_url . '&';
    $merchant_data .= 'cancel_url=' . $return_url . '&';
    $merchant_data .= 'language=' . 'EN&';
    $merchant_data .= 'billing_name=' . $order->first_name . ' ' . $order->last_name . '&';
    $merchant_data .= 'billing_address=' . $order->address_line_1 . ' ' . $order->address_line_2 . '&';
    $merchant_data .= 'billing_city=' . $order->city . '&';
    $merchant_data .= 'billing_state=' . $order->state . '&';
    $merchant_data .= 'billing_zip=' . $order->pincode . '&';
    $merchant_data .= 'billing_country=' . 'India&';
    $merchant_data .= 'billing_tel=' . $order->mobile . '&';
    $merchant_data .= 'billing_email=' . $order->email . '';

    // echo $merchant_data; exit;

    $encrypted_data=encrypt($merchant_data, $working_key);
        

?>
<form method="post" name="redirect" action="<?= $url ?>"> 
<?php
    echo "<input type=hidden name=encRequest value=$encrypted_data>";
    echo "<input type=hidden name=access_code value=$access_code>";
    echo "<input type=hidden name=merchant_data value=$merchant_data>";
?>
</form>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

<?= $this->extend('Webly\Core\Views\Layouts\email') ?>
<?= $this->section('content') ?>
<p><strong>Dear <?= $order->first_name?>,</strong></p>

<p>
    Thank you for your recent order with us. We are pleased to confirm that we have received your order.
</p>

<p>
    To complete the payment and finalize your order, please use the following link. This will direct you to our secure payment portal where you can process the payment conveniently.
</p>


<?php $path = "https://jashpure.com/orders/payment/{$order->id}"; ?>
<p>
    <span class="btn btn-primary"><a class="btn btn-primary" href="<?= $path?>" target="_blank">Pay now</a></span>
</p>

<p><strong>Order Details</strong></p>
<table class="table">
    <tr>
        <td><strong>Product</strong></td>
        <td align="right"><strong>Qty</strong></td>
        <td align="right"><strong>Rate</strong></td>
        <td align="right"><strong>Amount</strong></td>
    </tr>
    <?php foreach($orderDetails as $detail) { ?>
        <tr>
            <td><?= $detail->product?></td>
            <td align="right"><?= $detail->qty?></td>
            <td align="right"><?= number_to_currency($detail->rate + $detail->cgst + $detail->sgst + $detail->igst, 'INR', 'en_IN', 0) ?></td>
            <td align="right"><?= number_to_currency($detail->amount, 'INR', 'en_IN', 0)?></td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="3"><strong>Total</strong></td>
        <td align="right"><strong><?= number_to_currency($order->net_amount, 'INR', 'en_IN', 0)?></strong></td>
    </tr>
</table>
<p>&nbsp;</p>
<p>Thank you for Shopping with https://jashpure.com</p>

<p>
    Regards,<br /><br />
    <strong>Team JASHPURE</strong><br />
    JASHPURE, Mahua Centre of Excellence, <br />
    Near Manthan Food Lab, Beside Ranjita Stadium, <br />
    Main Road, Jashpur Nagar, Chhattisgarh: 496331 <br /> <br />
    +91 87702 68673 | +91 70499 36000 <br />
    info@jashpure.com <br />
</p>
<p><strong>"Tribal Touch, Pure Perfection, Nature's Best Unveiled,"</strong> encapsulates the essence of what we represent – a harmonious blend of traditional wisdom, purity, and a commitment to showcasing the best that nature has to offer.</p>
<?= $this->endSection() ?>
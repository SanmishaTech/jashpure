<?= $this->extend('Webly\Core\Views\Layouts\email') ?>
<?= $this->section('content') ?>
<p><strong>Dear <?= $order->first_name?>,</strong></p>

<p>
    Thank you for your Order
</p>

<p>
    Just to let you know — we've received your order, and it is now being processed. It will be shipped within 1-3 working days from our Hub.
</p>

<p>
    Please find attached invoice copy.      
</p>

<?php $path = "https://jashpure.com/orders/status/{$order->id}"; ?>
<p>
    To check order status click the following link<br />
    <a href="<?= $path?>" target="_blank"><?= $path?></a>
</p>

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
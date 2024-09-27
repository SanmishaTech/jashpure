<?= $this->include('Default/elements/header') ?>

<?= $this->include('Default/elements/menu') ?>

<div class="fables-header fables-after-overlay bg-rules5">
    <div class="container">
        <h2 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s"><?= $title ?>
        </h2>
    </div>
</div>


<div class="container pt-5 pb-5">
    <?php if($status) { ?>
        <h3 class="font-35 font-weight-bold fables-main-text-color text-center">Thank you. Your transaction is successful.</h3>
    <?php } else { ?>
        <h3 class="font-35 font-weight-bold fables-main-text-color text-center">Sorry. Your transaction has failed.</h3><br />
        <h5 class="font-25 font-weight-bold fables-main-text-color text-center"><a href="/orders/payment/<?= $order->id ?>">Click here to try again.</a></h5>        
    <?php } ?>
</div>

<?= $this->include('Default/elements/footer') ?>
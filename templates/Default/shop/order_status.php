<?= $this->include('Default/elements/header') ?>

<?= $this->include('Default/elements/menu') ?>

<div class="fables-header fables-after-overlay bg-rules5">
    <div class="container">
        <h2 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s"><?= $title ?> - <?= $order->order_status == "Open" ? "Getting ready for Dispatch" : "Dispatched" ?>
        </h2>
    </div>
</div>

<div class="container pt-5 pb-5">
    <table class="table">
        <tr>
            <td width="50%">
                <strong><?= $order->first_name ?>&nbsp;<?= $order->last_name ?></strong><br />
                <?= $order->address_line_1 ?><br />
                <?= $order->address_line_2 ?><br />
                <?= $order->city ?>&nbsp;<?= $order->state ?>-<?= $order->pincode ?><br /><br />
                <?= $order->email ?><br />
                <?= $order->mobile ?><br />
            </td>
            <td align="right">
                <strong>Invoice No:</strong> Jashpure-<?= $order->invoice_no ?><br />
                <strong>Invoice Date:</strong> <?= $order->invoice_date ?><br />
                <strong>Payment Status:</strong> <?= $order->payment_status ?><br />
                <strong>Payment Ref:</strong> <?= $order->payment_ref_no ?><br />
                <strong>Order Status:</strong> <?= $order->order_status ?><br />
                <strong>Dispatch Details:</strong> <?= $order->despatch_details ?><br />
            </td>
        </tr>
    </table>
    <table class="table">
        <thead>
            <th>Product</th>
            <th>Qty</th>
            <th>Rate</th>
            <th>Amount</th>
        </thead>
        <tbody>
            <?php foreach($orderDetails as $detail) ?>
            <tr>
                <td><?= $detail->product ?></td>
                <td><?= $detail->qty ?></td>
                <td><?= $detail->rate ?></td>
                <td align="right"><?= $detail->amount ?></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan=3" align="right"><strong>Gross Amount</strong></td>
                <td align="right"><strong><?= $order->gross_amount ?></strong></td>
            </tr>
            <tr>
                <td colspan=3" align="right"><strong>Delivery Charges</strong></td>
                <td align="right"><strong><?= $order->delivery_charges ?></strong></td>
            </tr>
            <tr>
                <td colspan=3" align="right"><strong>Net Amount</strong></td>
                <td align="right"><strong><?= $order->net_amount ?></strong></td>
            </tr>
        </tfoot>
    </table>
</div>

<?= $this->include('Default/elements/footer') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
            @page { margin: 25px 25px; }
			body {
                font-family: DejaVu Sans; sans-serif;
				font-size: 9px;
			}
			table {
				width: 100%;
				border-collapse: collapse;
			}
			.second{
				width: 100%;
				border-collapse: collapse;

			}
			
			table, th, td {
				border: 1px solid #BFBFBF;
				padding: 2px;
				vertical-align: top;
			}
			th {
				align: center;
				vertical-align: middle;
			}

			tr.rejected td, tr.rejected th {
				text-decoration: line-through;
			}

			.color {
				background-color: #E5E5E5;
			}

			h3, hr {
				padding :0;
				margin :0;
			}
		</style>    
</head>
<body>
    <h1 style="text-align:center;">Jai Jungle Farmers Producer Company Limited</h1>
    <p style="text-align:center; margin:0; padding:0">
        <strong><i>
            3085, WARD NO - 1, GAMHARIA, Jashpur, Chhattisgarh, 496331, Jashpur-496331<br />
            Email: samarthposted@gmail.com, GSTIN: 22AAFCJ1089E1ZV
        </i><strong>
    </p>
    <hr />
    <h2 style="text-align:center; margin:0;"><u>INVOICE</u></h2>
    <table>
        <tr>
            <td width="25%"><strong>Invoice No :</strong></td>
            <td width="25%">Jashpure-<?= $order->invoice_no ?></td>
            <td width="25%" align="right"><strong>Invoice Date :<strong></td>
            <td align="right"><?= date_create_from_format("Y-m-d", $order->invoice_date)->format('d/m/Y') ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <strong><?= $order->first_name ?>&nbsp;<?= $order->last_name ?></strong><br />
                <?= $order->address_line_1 ?><br />
                <?= $order->address_line_2 ?><br />
                <?= $order->city ?>, <?= $order->state ?><br />
                <?= $order->pincode ?>, India<br />
            </td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th width="7%">Sr. No.</th>
                <th>Particulars</th>
                <th width="8%">Qty</th>
                <th width="8%">Rate</th>
                <th width="8%">GST</th>
                <th width="8%">CGST</th>
                <th width="8%">SGST</th>
                <th width="8%">IGST</th>
                <th width="10%">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($orderDetails as $i=>$detail) { 
            ?>
            <tr>
                <td><?= ($i + 1)?></td>
                <td><strong><?= $detail->product ?></strong></td>
                <td><?= $detail->qty ?></td>
                <td align="right"><?= number_to_currency($detail->rate, 'INR', 'en_IN', 2)?></td>
                <td align="right"><?= round($detail->gst_rate, 2)?>%</td>
                <td align="right"><?= number_to_currency($detail->cgst, 'INR', 'en_IN', 2)?></td>
                <td align="right"><?= number_to_currency($detail->sgst, 'INR', 'en_IN', 2)?></td>s
                <td align="right"><?= number_to_currency($detail->igst, 'INR', 'en_IN', 2)?></td>
                <td align="right"><?= number_to_currency($detail->amount, 'INR', 'en_IN', 2)?></td>
            </tr>
            <?php } ?>            
        </tbody>
        <tfoot>
            <tr>
                <td align="right" colspan="8"><strong>Gross Amount</strong></td>
                <td align="right"><strong><?= number_to_currency($order->gross_amount , 'INR', 'en_IN', 2)?></strong></td>
            </tr>            
            <tr>
                <td align="right" colspan="8"><strong>Delivery Charges</strong></td>
                <td align="right"><strong><?= number_to_currency($order->delivery_charges , 'INR', 'en_IN', 2)?></strong></td>
            </tr>            
            <tr>
                <td align="right" colspan="8"><strong>Total</strong></td>
                <td align="right"><strong><?= number_to_currency($order->net_amount , 'INR', 'en_IN', 2)?></strong></td>
            </tr>
            <tr>
                <td colspan="9"><strong>Rupees in Words : <u><?= service('utility')->convertAmountToWords((float)$order->net_amount) ?></u></strong></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
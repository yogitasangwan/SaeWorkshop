

<?php
$order  = $client->order->create([  'receipt'         => 'order_rcptid_11',  'amount'          => 50000, // amount in the smallest currency unit  'currency'        => 'INR',// <a href="/docs/payment-gateway/payments/international-payments/#supported-currencies" target="_blank">See the list of supported currencies</a>.)  'payment_capture' =>  '0']);


?>

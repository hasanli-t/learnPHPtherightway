<?php

$paymentStatus = 'PAID';

$paymentSattusDisplay = match($paymentStatus) {
    'PAID' => 'Paid',
    'REJECTED','DECLINED' => 'Payment Decline',
    'PENDING' => 'Pending Payment',
    default => 'Unknown Payment Status'
};

// switch loose comparison ==
// match strict comparison ===
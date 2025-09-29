<?php

declare(strict_types=1);

$paymentStatus = 'paid';

switch($paymentStatus)
{
    case 'paid':
        echo 'PAID';
        break;
    
    case 'declined':
    case 'rejected':
        echo 'Payment DECLINED or REJECTED';
        break;

    case 'pending':
        echo 'pending';
        break;

    default:
        echo 'Unknown payment status';
}
<?php

$paymentStatuses = [1, 3, 0];

foreach($paymentStatuses as $paymentStatus) {

    switch($paymentStatus) {
        case 1:
            continue 2;
            echo 'Paid';

        Case 2:
        Case 3:
            echo 'Payment Declined';
            break;   

        Case 0:
            echo 'Pending Payment';
            break;

        default:
            echo 'Unknown Payment Status';
    }

    echo '<br />';
}

function x() {
    sleep(3);

    echo 'Done <br />';

    return 3;
}

switch(x()) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo 4;    
}
<?php
function prepare_order($order) {

    $table = $order['table'];


    $fruits_list = "";


    foreach ($order['fruit'] as $index => $fruit) {

        if ($index > 0) {
            $fruits_list .= ", ";
        }
        $fruits_list .= $fruit;
    }


    $message = "Order for table $table: Juice with $fruits_list";


    if (!empty($order['extra'])) {
        $extra = $order['extra'];
        $message .= " and extra item: $extra.";
    } else {
        $message .= ".";
    }

    return $message;
}


$order = [
    'table' => 5,
    'fruit' => ['apple', 'banana', 'orange'],
    'extra' => 'ginger shot'
];

echo prepare_order($order);
?>

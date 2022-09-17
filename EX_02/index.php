<?php
    $shopping_cart = 159.95;
    $tipo = 'periferico';
    $shipping_price = 0.0;

    if ($shopping_cart <= 20 && $tipo == 'cables') {
        echo "No se puede enviar.";
    } else if ($shopping_cart <= 20 && $tipo == 'periferico') {
        $shipping_price = 4.99;
        echo 'Los gastos de envio son '.$shipping_price.'€.';
    }

    if ($shopping_cart > 20 && $shopping_cart <= 50) {
        $shipping_price = 4.99;
        echo 'Los gastos de envio son '.$shipping_price.'€.';
    }

    if ($shopping_cart > 50) {
        echo 'Los portes son gratis.'.'<br />';
    }

    if ($shopping_cart > 150) {
        echo 'Codigo de descuento para la proxima compra: GIMBERNAT_20_%.';
    }
?>

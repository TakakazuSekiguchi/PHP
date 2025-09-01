<?php
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $item = htmlspecialchars($_POST['item'], ENT_QUOTES);
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES);

    echo "私の名前は、" . $name . "です" . "<br />";
    echo "ご注文の商品は、" . $item . "<br />";
    echo "注文数は、" . $number . "<br />";
?>
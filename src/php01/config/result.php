<?php
$name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$radio = htmlspecialchars($_POST['radio'],ENT_QUOTES);
$num = htmlspecialchars($_POST['num'],ENT_QUOTES);
echo "私の名前は、" . $name . "<br>";
echo "ご希望の商品は、" . $radio . "<br>";
echo "注文数は、" . $num . "<br>";
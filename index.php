<?php

    include "load_config.php";
    include "models/Credit.php";

$credit = new Credit();

//$s = Credit::create(['description' =>'senha.com']);

echo $credit->all()->toJson();
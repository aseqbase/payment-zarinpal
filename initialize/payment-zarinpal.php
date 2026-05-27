<?php
plugin("ZarinPal");
\_::$Joint->ZarinPal = new MiMFa\Plugin\ZarinPal();

if (\_::$User->HasAccess(\_::$User->AdminAccess) && isset(\_::$Front->AdminMenus["Administrator"])) {
    if(!isset(\_::$Front->AdminMenus["Administrator-Payment"])) 
        \_::$Front->AdminMenus["Administrator-Payment"] =  array(
            "Name" => "PAYMENTS",
            "Access" => \_::$User->SuperAccess,
            "Description" => "To manage all the 'payment accounts'",
            "Image" => "credit-card",
            "Items" => []
        );
    \_::$Front->AdminMenus["Administrator-Payment"]["Items"]["Administrator-Payment-ZarinPal"] = array(
            "Name" => "ZarinPal Payment",
            "Path" => "/administrator/payment/zarinpal",
            "Access" => \_::$User->SuperAccess,
            "Description" => "To manage the 'ZarinPal account'",
            "Image" => asset("payment/image/ZarinPal-Port.ico"));
}
<?php
if(!\_::$Joint->ZarinPal->MerchantId) return null;
library("payment/ZarinPalPort");
return new MiMFa\Library\Payment\ZarinPalPort(
    \_::$Joint->ZarinPal->MerchantId
);
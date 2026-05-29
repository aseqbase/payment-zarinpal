<?php
namespace MiMFa\Plugin;

class ZarinPal extends \MiMFa\Library\Revise
{
    /**
     * To active the test payment port
     * @category Payment
     * @field bool
     */
    public $TestPort = false;
    /**
     * Get this code from the ZarinPal official website https://www.zarinpal.com
     * @category Security
     * @field Password
     */
    public string|null $MerchantId = null;
}
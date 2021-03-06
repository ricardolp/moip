<?php

namespace Artesaos\Moip;

use Moip\Moip as Api;

/**
 * Class Moip.
 *
 * @package Artesaos\Moip
 */
class Moip
{
    /**
     * Class Moip sdk.
     *
     * @var \Moip\Moip
     **/
    private $moip;

    /**
     * Moip constructor.
     *
     * @param \Moip\Moip $api
     */
    function __construct(Api $api)
    {
        $this->moip = $api;

        return $this;
    }

    /**
     * Return a intance of package.
     *
     * @return \Moip\Moip
     */
    public function getApi()
    {
        return $this->moip;
    }

    /**
     * Start Moip sdk.
     *
     * @deprecated
     */
    public function start()
    {
        return $this;
    }

    /**
     * Create a new Customer instance.
     *
     * @return \Moip\Resource\Customer
     */
    public function customers()
    {
        return $this->moip->customers();
    }

    /**
     * Create a new Entry instance.
     *
     * @return \Moip\Resource\Entry
     */
    public function entries()
    {
        return $this->moip->entries();
    }

    /**
     * Create a new Order instance.
     *
     * @return \Moip\Resource\Orders
     */
    public function orders()
    {
        return $this->moip->orders();
    }

    /**
     * Create a new Payment instance.
     *
     * @return \Moip\Resource\Payment
     */
    public function payments()
    {
        return $this->moip->payments();
    }

    /**
     * Create a new Multiorders instance.
     *
     * @return \Moip\Resource\Multiorders
     */
    public function multiorders()
    {
        return $this->moip->multiorders();
    }
}

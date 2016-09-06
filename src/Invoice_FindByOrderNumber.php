<?php

namespace Economic;

class Invoice_FindByOrderNumber
{

    /**
     * @var int $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @param int $orderNumber
     */
    public function __construct($orderNumber)
    {
      $this->orderNumber = $orderNumber;
    }

    /**
     * @return int
     */
    public function getOrderNumber()
    {
      return $this->orderNumber;
    }

    /**
     * @param int $orderNumber
     * @return \Economic\Invoice_FindByOrderNumber
     */
    public function setOrderNumber($orderNumber)
    {
      $this->orderNumber = $orderNumber;
      return $this;
    }

}

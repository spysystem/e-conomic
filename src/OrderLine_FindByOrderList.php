<?php

namespace Economic;

class OrderLine_FindByOrderList
{

    /**
     * @var ArrayOfOrderHandle $orderHandles
     */
    protected $orderHandles = null;

    /**
     * @param ArrayOfOrderHandle $orderHandles
     */
    public function __construct($orderHandles)
    {
      $this->orderHandles = $orderHandles;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrderHandles()
    {
      return $this->orderHandles;
    }

    /**
     * @param ArrayOfOrderHandle $orderHandles
     * @return \Economic\OrderLine_FindByOrderList
     */
    public function setOrderHandles($orderHandles)
    {
      $this->orderHandles = $orderHandles;
      return $this;
    }

}

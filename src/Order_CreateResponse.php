<?php

namespace Economic;

class Order_CreateResponse
{

    /**
     * @var OrderHandle $Order_CreateResult
     */
    protected $Order_CreateResult = null;

    /**
     * @param OrderHandle $Order_CreateResult
     */
    public function __construct($Order_CreateResult)
    {
      $this->Order_CreateResult = $Order_CreateResult;
    }

    /**
     * @return OrderHandle
     */
    public function getOrder_CreateResult()
    {
      return $this->Order_CreateResult;
    }

    /**
     * @param OrderHandle $Order_CreateResult
     * @return \Economic\Order_CreateResponse
     */
    public function setOrder_CreateResult($Order_CreateResult)
    {
      $this->Order_CreateResult = $Order_CreateResult;
      return $this;
    }

}

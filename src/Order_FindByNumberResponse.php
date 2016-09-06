<?php

namespace Economic;

class Order_FindByNumberResponse
{

    /**
     * @var OrderHandle $Order_FindByNumberResult
     */
    protected $Order_FindByNumberResult = null;

    /**
     * @param OrderHandle $Order_FindByNumberResult
     */
    public function __construct($Order_FindByNumberResult)
    {
      $this->Order_FindByNumberResult = $Order_FindByNumberResult;
    }

    /**
     * @return OrderHandle
     */
    public function getOrder_FindByNumberResult()
    {
      return $this->Order_FindByNumberResult;
    }

    /**
     * @param OrderHandle $Order_FindByNumberResult
     * @return \Economic\Order_FindByNumberResponse
     */
    public function setOrder_FindByNumberResult($Order_FindByNumberResult)
    {
      $this->Order_FindByNumberResult = $Order_FindByNumberResult;
      return $this;
    }

}

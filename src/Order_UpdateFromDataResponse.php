<?php

namespace Economic;

class Order_UpdateFromDataResponse
{

    /**
     * @var OrderHandle $Order_UpdateFromDataResult
     */
    protected $Order_UpdateFromDataResult = null;

    /**
     * @param OrderHandle $Order_UpdateFromDataResult
     */
    public function __construct($Order_UpdateFromDataResult)
    {
      $this->Order_UpdateFromDataResult = $Order_UpdateFromDataResult;
    }

    /**
     * @return OrderHandle
     */
    public function getOrder_UpdateFromDataResult()
    {
      return $this->Order_UpdateFromDataResult;
    }

    /**
     * @param OrderHandle $Order_UpdateFromDataResult
     * @return \Economic\Order_UpdateFromDataResponse
     */
    public function setOrder_UpdateFromDataResult($Order_UpdateFromDataResult)
    {
      $this->Order_UpdateFromDataResult = $Order_UpdateFromDataResult;
      return $this;
    }

}

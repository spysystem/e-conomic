<?php

namespace Economic;

class Order_CreateFromDataResponse
{

    /**
     * @var OrderHandle $Order_CreateFromDataResult
     */
    protected $Order_CreateFromDataResult = null;

    /**
     * @param OrderHandle $Order_CreateFromDataResult
     */
    public function __construct($Order_CreateFromDataResult)
    {
      $this->Order_CreateFromDataResult = $Order_CreateFromDataResult;
    }

    /**
     * @return OrderHandle
     */
    public function getOrder_CreateFromDataResult()
    {
      return $this->Order_CreateFromDataResult;
    }

    /**
     * @param OrderHandle $Order_CreateFromDataResult
     * @return \Economic\Order_CreateFromDataResponse
     */
    public function setOrder_CreateFromDataResult($Order_CreateFromDataResult)
    {
      $this->Order_CreateFromDataResult = $Order_CreateFromDataResult;
      return $this;
    }

}

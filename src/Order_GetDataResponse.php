<?php

namespace Economic;

class Order_GetDataResponse
{

    /**
     * @var OrderData $Order_GetDataResult
     */
    protected $Order_GetDataResult = null;

    /**
     * @param OrderData $Order_GetDataResult
     */
    public function __construct($Order_GetDataResult)
    {
      $this->Order_GetDataResult = $Order_GetDataResult;
    }

    /**
     * @return OrderData
     */
    public function getOrder_GetDataResult()
    {
      return $this->Order_GetDataResult;
    }

    /**
     * @param OrderData $Order_GetDataResult
     * @return \Economic\Order_GetDataResponse
     */
    public function setOrder_GetDataResult($Order_GetDataResult)
    {
      $this->Order_GetDataResult = $Order_GetDataResult;
      return $this;
    }

}

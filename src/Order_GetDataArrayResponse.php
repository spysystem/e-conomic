<?php

namespace Economic;

class Order_GetDataArrayResponse
{

    /**
     * @var ArrayOfOrderData $Order_GetDataArrayResult
     */
    protected $Order_GetDataArrayResult = null;

    /**
     * @param ArrayOfOrderData $Order_GetDataArrayResult
     */
    public function __construct($Order_GetDataArrayResult)
    {
      $this->Order_GetDataArrayResult = $Order_GetDataArrayResult;
    }

    /**
     * @return ArrayOfOrderData
     */
    public function getOrder_GetDataArrayResult()
    {
      return $this->Order_GetDataArrayResult;
    }

    /**
     * @param ArrayOfOrderData $Order_GetDataArrayResult
     * @return \Economic\Order_GetDataArrayResponse
     */
    public function setOrder_GetDataArrayResult($Order_GetDataArrayResult)
    {
      $this->Order_GetDataArrayResult = $Order_GetDataArrayResult;
      return $this;
    }

}

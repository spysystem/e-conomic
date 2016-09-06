<?php

namespace Economic;

class OrderLine_GetAllResponse
{

    /**
     * @var ArrayOfOrderLineHandle $OrderLine_GetAllResult
     */
    protected $OrderLine_GetAllResult = null;

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_GetAllResult
     */
    public function __construct($OrderLine_GetAllResult)
    {
      $this->OrderLine_GetAllResult = $OrderLine_GetAllResult;
    }

    /**
     * @return ArrayOfOrderLineHandle
     */
    public function getOrderLine_GetAllResult()
    {
      return $this->OrderLine_GetAllResult;
    }

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_GetAllResult
     * @return \Economic\OrderLine_GetAllResponse
     */
    public function setOrderLine_GetAllResult($OrderLine_GetAllResult)
    {
      $this->OrderLine_GetAllResult = $OrderLine_GetAllResult;
      return $this;
    }

}

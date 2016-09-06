<?php

namespace Economic;

class OrderLine_FindByOrderListResponse
{

    /**
     * @var ArrayOfOrderLineHandle $OrderLine_FindByOrderListResult
     */
    protected $OrderLine_FindByOrderListResult = null;

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_FindByOrderListResult
     */
    public function __construct($OrderLine_FindByOrderListResult)
    {
      $this->OrderLine_FindByOrderListResult = $OrderLine_FindByOrderListResult;
    }

    /**
     * @return ArrayOfOrderLineHandle
     */
    public function getOrderLine_FindByOrderListResult()
    {
      return $this->OrderLine_FindByOrderListResult;
    }

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_FindByOrderListResult
     * @return \Economic\OrderLine_FindByOrderListResponse
     */
    public function setOrderLine_FindByOrderListResult($OrderLine_FindByOrderListResult)
    {
      $this->OrderLine_FindByOrderListResult = $OrderLine_FindByOrderListResult;
      return $this;
    }

}

<?php

namespace Economic;

class OrderLine_FindByProductListResponse
{

    /**
     * @var ArrayOfOrderLineHandle $OrderLine_FindByProductListResult
     */
    protected $OrderLine_FindByProductListResult = null;

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_FindByProductListResult
     */
    public function __construct($OrderLine_FindByProductListResult)
    {
      $this->OrderLine_FindByProductListResult = $OrderLine_FindByProductListResult;
    }

    /**
     * @return ArrayOfOrderLineHandle
     */
    public function getOrderLine_FindByProductListResult()
    {
      return $this->OrderLine_FindByProductListResult;
    }

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_FindByProductListResult
     * @return \Economic\OrderLine_FindByProductListResponse
     */
    public function setOrderLine_FindByProductListResult($OrderLine_FindByProductListResult)
    {
      $this->OrderLine_FindByProductListResult = $OrderLine_FindByProductListResult;
      return $this;
    }

}

<?php

namespace Economic;

class OrderLine_FindByProductResponse
{

    /**
     * @var ArrayOfOrderLineHandle $OrderLine_FindByProductResult
     */
    protected $OrderLine_FindByProductResult = null;

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_FindByProductResult
     */
    public function __construct($OrderLine_FindByProductResult)
    {
      $this->OrderLine_FindByProductResult = $OrderLine_FindByProductResult;
    }

    /**
     * @return ArrayOfOrderLineHandle
     */
    public function getOrderLine_FindByProductResult()
    {
      return $this->OrderLine_FindByProductResult;
    }

    /**
     * @param ArrayOfOrderLineHandle $OrderLine_FindByProductResult
     * @return \Economic\OrderLine_FindByProductResponse
     */
    public function setOrderLine_FindByProductResult($OrderLine_FindByProductResult)
    {
      $this->OrderLine_FindByProductResult = $OrderLine_FindByProductResult;
      return $this;
    }

}

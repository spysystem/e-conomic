<?php

namespace Economic;

class OrderLine_GetProductResponse
{

    /**
     * @var ProductHandle $OrderLine_GetProductResult
     */
    protected $OrderLine_GetProductResult = null;

    /**
     * @param ProductHandle $OrderLine_GetProductResult
     */
    public function __construct($OrderLine_GetProductResult)
    {
      $this->OrderLine_GetProductResult = $OrderLine_GetProductResult;
    }

    /**
     * @return ProductHandle
     */
    public function getOrderLine_GetProductResult()
    {
      return $this->OrderLine_GetProductResult;
    }

    /**
     * @param ProductHandle $OrderLine_GetProductResult
     * @return \Economic\OrderLine_GetProductResponse
     */
    public function setOrderLine_GetProductResult($OrderLine_GetProductResult)
    {
      $this->OrderLine_GetProductResult = $OrderLine_GetProductResult;
      return $this;
    }

}

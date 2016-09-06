<?php

namespace Economic;

class Order_GetMarginResponse
{

    /**
     * @var float $Order_GetMarginResult
     */
    protected $Order_GetMarginResult = null;

    /**
     * @param float $Order_GetMarginResult
     */
    public function __construct($Order_GetMarginResult)
    {
      $this->Order_GetMarginResult = $Order_GetMarginResult;
    }

    /**
     * @return float
     */
    public function getOrder_GetMarginResult()
    {
      return $this->Order_GetMarginResult;
    }

    /**
     * @param float $Order_GetMarginResult
     * @return \Economic\Order_GetMarginResponse
     */
    public function setOrder_GetMarginResult($Order_GetMarginResult)
    {
      $this->Order_GetMarginResult = $Order_GetMarginResult;
      return $this;
    }

}

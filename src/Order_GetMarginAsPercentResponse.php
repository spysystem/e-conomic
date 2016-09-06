<?php

namespace Economic;

class Order_GetMarginAsPercentResponse
{

    /**
     * @var float $Order_GetMarginAsPercentResult
     */
    protected $Order_GetMarginAsPercentResult = null;

    /**
     * @param float $Order_GetMarginAsPercentResult
     */
    public function __construct($Order_GetMarginAsPercentResult)
    {
      $this->Order_GetMarginAsPercentResult = $Order_GetMarginAsPercentResult;
    }

    /**
     * @return float
     */
    public function getOrder_GetMarginAsPercentResult()
    {
      return $this->Order_GetMarginAsPercentResult;
    }

    /**
     * @param float $Order_GetMarginAsPercentResult
     * @return \Economic\Order_GetMarginAsPercentResponse
     */
    public function setOrder_GetMarginAsPercentResult($Order_GetMarginAsPercentResult)
    {
      $this->Order_GetMarginAsPercentResult = $Order_GetMarginAsPercentResult;
      return $this;
    }

}

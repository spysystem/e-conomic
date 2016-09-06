<?php

namespace Economic;

class Order_GetRoundingAmountResponse
{

    /**
     * @var float $Order_GetRoundingAmountResult
     */
    protected $Order_GetRoundingAmountResult = null;

    /**
     * @param float $Order_GetRoundingAmountResult
     */
    public function __construct($Order_GetRoundingAmountResult)
    {
      $this->Order_GetRoundingAmountResult = $Order_GetRoundingAmountResult;
    }

    /**
     * @return float
     */
    public function getOrder_GetRoundingAmountResult()
    {
      return $this->Order_GetRoundingAmountResult;
    }

    /**
     * @param float $Order_GetRoundingAmountResult
     * @return \Economic\Order_GetRoundingAmountResponse
     */
    public function setOrder_GetRoundingAmountResult($Order_GetRoundingAmountResult)
    {
      $this->Order_GetRoundingAmountResult = $Order_GetRoundingAmountResult;
      return $this;
    }

}

<?php

namespace Economic;

class Order_GetExchangeRateResponse
{

    /**
     * @var float $Order_GetExchangeRateResult
     */
    protected $Order_GetExchangeRateResult = null;

    /**
     * @param float $Order_GetExchangeRateResult
     */
    public function __construct($Order_GetExchangeRateResult)
    {
      $this->Order_GetExchangeRateResult = $Order_GetExchangeRateResult;
    }

    /**
     * @return float
     */
    public function getOrder_GetExchangeRateResult()
    {
      return $this->Order_GetExchangeRateResult;
    }

    /**
     * @param float $Order_GetExchangeRateResult
     * @return \Economic\Order_GetExchangeRateResponse
     */
    public function setOrder_GetExchangeRateResult($Order_GetExchangeRateResult)
    {
      $this->Order_GetExchangeRateResult = $Order_GetExchangeRateResult;
      return $this;
    }

}

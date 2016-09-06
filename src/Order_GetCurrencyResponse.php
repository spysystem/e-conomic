<?php

namespace Economic;

class Order_GetCurrencyResponse
{

    /**
     * @var CurrencyHandle $Order_GetCurrencyResult
     */
    protected $Order_GetCurrencyResult = null;

    /**
     * @param CurrencyHandle $Order_GetCurrencyResult
     */
    public function __construct($Order_GetCurrencyResult)
    {
      $this->Order_GetCurrencyResult = $Order_GetCurrencyResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getOrder_GetCurrencyResult()
    {
      return $this->Order_GetCurrencyResult;
    }

    /**
     * @param CurrencyHandle $Order_GetCurrencyResult
     * @return \Economic\Order_GetCurrencyResponse
     */
    public function setOrder_GetCurrencyResult($Order_GetCurrencyResult)
    {
      $this->Order_GetCurrencyResult = $Order_GetCurrencyResult;
      return $this;
    }

}

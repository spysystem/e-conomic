<?php

namespace Economic;

class Order_GetVatAmountResponse
{

    /**
     * @var float $Order_GetVatAmountResult
     */
    protected $Order_GetVatAmountResult = null;

    /**
     * @param float $Order_GetVatAmountResult
     */
    public function __construct($Order_GetVatAmountResult)
    {
      $this->Order_GetVatAmountResult = $Order_GetVatAmountResult;
    }

    /**
     * @return float
     */
    public function getOrder_GetVatAmountResult()
    {
      return $this->Order_GetVatAmountResult;
    }

    /**
     * @param float $Order_GetVatAmountResult
     * @return \Economic\Order_GetVatAmountResponse
     */
    public function setOrder_GetVatAmountResult($Order_GetVatAmountResult)
    {
      $this->Order_GetVatAmountResult = $Order_GetVatAmountResult;
      return $this;
    }

}

<?php

namespace Economic;

class Order_GetDebtorAddressResponse
{

    /**
     * @var string $Order_GetDebtorAddressResult
     */
    protected $Order_GetDebtorAddressResult = null;

    /**
     * @param string $Order_GetDebtorAddressResult
     */
    public function __construct($Order_GetDebtorAddressResult)
    {
      $this->Order_GetDebtorAddressResult = $Order_GetDebtorAddressResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDebtorAddressResult()
    {
      return $this->Order_GetDebtorAddressResult;
    }

    /**
     * @param string $Order_GetDebtorAddressResult
     * @return \Economic\Order_GetDebtorAddressResponse
     */
    public function setOrder_GetDebtorAddressResult($Order_GetDebtorAddressResult)
    {
      $this->Order_GetDebtorAddressResult = $Order_GetDebtorAddressResult;
      return $this;
    }

}

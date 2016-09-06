<?php

namespace Economic;

class Order_GetDebtorCountryResponse
{

    /**
     * @var string $Order_GetDebtorCountryResult
     */
    protected $Order_GetDebtorCountryResult = null;

    /**
     * @param string $Order_GetDebtorCountryResult
     */
    public function __construct($Order_GetDebtorCountryResult)
    {
      $this->Order_GetDebtorCountryResult = $Order_GetDebtorCountryResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDebtorCountryResult()
    {
      return $this->Order_GetDebtorCountryResult;
    }

    /**
     * @param string $Order_GetDebtorCountryResult
     * @return \Economic\Order_GetDebtorCountryResponse
     */
    public function setOrder_GetDebtorCountryResult($Order_GetDebtorCountryResult)
    {
      $this->Order_GetDebtorCountryResult = $Order_GetDebtorCountryResult;
      return $this;
    }

}

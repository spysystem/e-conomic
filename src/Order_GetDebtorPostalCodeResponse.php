<?php

namespace Economic;

class Order_GetDebtorPostalCodeResponse
{

    /**
     * @var string $Order_GetDebtorPostalCodeResult
     */
    protected $Order_GetDebtorPostalCodeResult = null;

    /**
     * @param string $Order_GetDebtorPostalCodeResult
     */
    public function __construct($Order_GetDebtorPostalCodeResult)
    {
      $this->Order_GetDebtorPostalCodeResult = $Order_GetDebtorPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDebtorPostalCodeResult()
    {
      return $this->Order_GetDebtorPostalCodeResult;
    }

    /**
     * @param string $Order_GetDebtorPostalCodeResult
     * @return \Economic\Order_GetDebtorPostalCodeResponse
     */
    public function setOrder_GetDebtorPostalCodeResult($Order_GetDebtorPostalCodeResult)
    {
      $this->Order_GetDebtorPostalCodeResult = $Order_GetDebtorPostalCodeResult;
      return $this;
    }

}

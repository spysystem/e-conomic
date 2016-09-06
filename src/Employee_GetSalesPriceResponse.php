<?php

namespace Economic;

class Employee_GetSalesPriceResponse
{

    /**
     * @var float $Employee_GetSalesPriceResult
     */
    protected $Employee_GetSalesPriceResult = null;

    /**
     * @param float $Employee_GetSalesPriceResult
     */
    public function __construct($Employee_GetSalesPriceResult)
    {
      $this->Employee_GetSalesPriceResult = $Employee_GetSalesPriceResult;
    }

    /**
     * @return float
     */
    public function getEmployee_GetSalesPriceResult()
    {
      return $this->Employee_GetSalesPriceResult;
    }

    /**
     * @param float $Employee_GetSalesPriceResult
     * @return \Economic\Employee_GetSalesPriceResponse
     */
    public function setEmployee_GetSalesPriceResult($Employee_GetSalesPriceResult)
    {
      $this->Employee_GetSalesPriceResult = $Employee_GetSalesPriceResult;
      return $this;
    }

}

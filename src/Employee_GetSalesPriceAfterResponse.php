<?php

namespace Economic;

class Employee_GetSalesPriceAfterResponse
{

    /**
     * @var float $Employee_GetSalesPriceAfterResult
     */
    protected $Employee_GetSalesPriceAfterResult = null;

    /**
     * @param float $Employee_GetSalesPriceAfterResult
     */
    public function __construct($Employee_GetSalesPriceAfterResult)
    {
      $this->Employee_GetSalesPriceAfterResult = $Employee_GetSalesPriceAfterResult;
    }

    /**
     * @return float
     */
    public function getEmployee_GetSalesPriceAfterResult()
    {
      return $this->Employee_GetSalesPriceAfterResult;
    }

    /**
     * @param float $Employee_GetSalesPriceAfterResult
     * @return \Economic\Employee_GetSalesPriceAfterResponse
     */
    public function setEmployee_GetSalesPriceAfterResult($Employee_GetSalesPriceAfterResult)
    {
      $this->Employee_GetSalesPriceAfterResult = $Employee_GetSalesPriceAfterResult;
      return $this;
    }

}

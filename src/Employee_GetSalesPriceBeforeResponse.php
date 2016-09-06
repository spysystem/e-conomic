<?php

namespace Economic;

class Employee_GetSalesPriceBeforeResponse
{

    /**
     * @var float $Employee_GetSalesPriceBeforeResult
     */
    protected $Employee_GetSalesPriceBeforeResult = null;

    /**
     * @param float $Employee_GetSalesPriceBeforeResult
     */
    public function __construct($Employee_GetSalesPriceBeforeResult)
    {
      $this->Employee_GetSalesPriceBeforeResult = $Employee_GetSalesPriceBeforeResult;
    }

    /**
     * @return float
     */
    public function getEmployee_GetSalesPriceBeforeResult()
    {
      return $this->Employee_GetSalesPriceBeforeResult;
    }

    /**
     * @param float $Employee_GetSalesPriceBeforeResult
     * @return \Economic\Employee_GetSalesPriceBeforeResponse
     */
    public function setEmployee_GetSalesPriceBeforeResult($Employee_GetSalesPriceBeforeResult)
    {
      $this->Employee_GetSalesPriceBeforeResult = $Employee_GetSalesPriceBeforeResult;
      return $this;
    }

}

<?php

namespace Economic;

class Employee_GetCostPriceResponse
{

    /**
     * @var float $Employee_GetCostPriceResult
     */
    protected $Employee_GetCostPriceResult = null;

    /**
     * @param float $Employee_GetCostPriceResult
     */
    public function __construct($Employee_GetCostPriceResult)
    {
      $this->Employee_GetCostPriceResult = $Employee_GetCostPriceResult;
    }

    /**
     * @return float
     */
    public function getEmployee_GetCostPriceResult()
    {
      return $this->Employee_GetCostPriceResult;
    }

    /**
     * @param float $Employee_GetCostPriceResult
     * @return \Economic\Employee_GetCostPriceResponse
     */
    public function setEmployee_GetCostPriceResult($Employee_GetCostPriceResult)
    {
      $this->Employee_GetCostPriceResult = $Employee_GetCostPriceResult;
      return $this;
    }

}

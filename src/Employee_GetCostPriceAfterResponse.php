<?php

namespace Economic;

class Employee_GetCostPriceAfterResponse
{

    /**
     * @var float $Employee_GetCostPriceAfterResult
     */
    protected $Employee_GetCostPriceAfterResult = null;

    /**
     * @param float $Employee_GetCostPriceAfterResult
     */
    public function __construct($Employee_GetCostPriceAfterResult)
    {
      $this->Employee_GetCostPriceAfterResult = $Employee_GetCostPriceAfterResult;
    }

    /**
     * @return float
     */
    public function getEmployee_GetCostPriceAfterResult()
    {
      return $this->Employee_GetCostPriceAfterResult;
    }

    /**
     * @param float $Employee_GetCostPriceAfterResult
     * @return \Economic\Employee_GetCostPriceAfterResponse
     */
    public function setEmployee_GetCostPriceAfterResult($Employee_GetCostPriceAfterResult)
    {
      $this->Employee_GetCostPriceAfterResult = $Employee_GetCostPriceAfterResult;
      return $this;
    }

}

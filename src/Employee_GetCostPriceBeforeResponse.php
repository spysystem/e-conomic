<?php

namespace Economic;

class Employee_GetCostPriceBeforeResponse
{

    /**
     * @var float $Employee_GetCostPriceBeforeResult
     */
    protected $Employee_GetCostPriceBeforeResult = null;

    /**
     * @param float $Employee_GetCostPriceBeforeResult
     */
    public function __construct($Employee_GetCostPriceBeforeResult)
    {
      $this->Employee_GetCostPriceBeforeResult = $Employee_GetCostPriceBeforeResult;
    }

    /**
     * @return float
     */
    public function getEmployee_GetCostPriceBeforeResult()
    {
      return $this->Employee_GetCostPriceBeforeResult;
    }

    /**
     * @param float $Employee_GetCostPriceBeforeResult
     * @return \Economic\Employee_GetCostPriceBeforeResponse
     */
    public function setEmployee_GetCostPriceBeforeResult($Employee_GetCostPriceBeforeResult)
    {
      $this->Employee_GetCostPriceBeforeResult = $Employee_GetCostPriceBeforeResult;
      return $this;
    }

}

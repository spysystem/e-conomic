<?php

namespace Economic;

class Employee_GetCostPriceByDateResponse
{

    /**
     * @var float $Employee_GetCostPriceByDateResult
     */
    protected $Employee_GetCostPriceByDateResult = null;

    /**
     * @param float $Employee_GetCostPriceByDateResult
     */
    public function __construct($Employee_GetCostPriceByDateResult)
    {
      $this->Employee_GetCostPriceByDateResult = $Employee_GetCostPriceByDateResult;
    }

    /**
     * @return float
     */
    public function getEmployee_GetCostPriceByDateResult()
    {
      return $this->Employee_GetCostPriceByDateResult;
    }

    /**
     * @param float $Employee_GetCostPriceByDateResult
     * @return \Economic\Employee_GetCostPriceByDateResponse
     */
    public function setEmployee_GetCostPriceByDateResult($Employee_GetCostPriceByDateResult)
    {
      $this->Employee_GetCostPriceByDateResult = $Employee_GetCostPriceByDateResult;
      return $this;
    }

}

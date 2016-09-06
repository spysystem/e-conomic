<?php

namespace Economic;

class Employee_GetSalesPriceByDateResponse
{

    /**
     * @var float $Employee_GetSalesPriceByDateResult
     */
    protected $Employee_GetSalesPriceByDateResult = null;

    /**
     * @param float $Employee_GetSalesPriceByDateResult
     */
    public function __construct($Employee_GetSalesPriceByDateResult)
    {
      $this->Employee_GetSalesPriceByDateResult = $Employee_GetSalesPriceByDateResult;
    }

    /**
     * @return float
     */
    public function getEmployee_GetSalesPriceByDateResult()
    {
      return $this->Employee_GetSalesPriceByDateResult;
    }

    /**
     * @param float $Employee_GetSalesPriceByDateResult
     * @return \Economic\Employee_GetSalesPriceByDateResponse
     */
    public function setEmployee_GetSalesPriceByDateResult($Employee_GetSalesPriceByDateResult)
    {
      $this->Employee_GetSalesPriceByDateResult = $Employee_GetSalesPriceByDateResult;
      return $this;
    }

}

<?php

namespace Economic;

class TimeEntry_GetSalesPriceResponse
{

    /**
     * @var float $TimeEntry_GetSalesPriceResult
     */
    protected $TimeEntry_GetSalesPriceResult = null;

    /**
     * @param float $TimeEntry_GetSalesPriceResult
     */
    public function __construct($TimeEntry_GetSalesPriceResult)
    {
      $this->TimeEntry_GetSalesPriceResult = $TimeEntry_GetSalesPriceResult;
    }

    /**
     * @return float
     */
    public function getTimeEntry_GetSalesPriceResult()
    {
      return $this->TimeEntry_GetSalesPriceResult;
    }

    /**
     * @param float $TimeEntry_GetSalesPriceResult
     * @return \Economic\TimeEntry_GetSalesPriceResponse
     */
    public function setTimeEntry_GetSalesPriceResult($TimeEntry_GetSalesPriceResult)
    {
      $this->TimeEntry_GetSalesPriceResult = $TimeEntry_GetSalesPriceResult;
      return $this;
    }

}

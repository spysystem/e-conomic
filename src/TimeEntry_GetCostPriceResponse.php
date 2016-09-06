<?php

namespace Economic;

class TimeEntry_GetCostPriceResponse
{

    /**
     * @var float $TimeEntry_GetCostPriceResult
     */
    protected $TimeEntry_GetCostPriceResult = null;

    /**
     * @param float $TimeEntry_GetCostPriceResult
     */
    public function __construct($TimeEntry_GetCostPriceResult)
    {
      $this->TimeEntry_GetCostPriceResult = $TimeEntry_GetCostPriceResult;
    }

    /**
     * @return float
     */
    public function getTimeEntry_GetCostPriceResult()
    {
      return $this->TimeEntry_GetCostPriceResult;
    }

    /**
     * @param float $TimeEntry_GetCostPriceResult
     * @return \Economic\TimeEntry_GetCostPriceResponse
     */
    public function setTimeEntry_GetCostPriceResult($TimeEntry_GetCostPriceResult)
    {
      $this->TimeEntry_GetCostPriceResult = $TimeEntry_GetCostPriceResult;
      return $this;
    }

}

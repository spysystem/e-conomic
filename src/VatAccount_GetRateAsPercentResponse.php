<?php

namespace Economic;

class VatAccount_GetRateAsPercentResponse
{

    /**
     * @var float $VatAccount_GetRateAsPercentResult
     */
    protected $VatAccount_GetRateAsPercentResult = null;

    /**
     * @param float $VatAccount_GetRateAsPercentResult
     */
    public function __construct($VatAccount_GetRateAsPercentResult)
    {
      $this->VatAccount_GetRateAsPercentResult = $VatAccount_GetRateAsPercentResult;
    }

    /**
     * @return float
     */
    public function getVatAccount_GetRateAsPercentResult()
    {
      return $this->VatAccount_GetRateAsPercentResult;
    }

    /**
     * @param float $VatAccount_GetRateAsPercentResult
     * @return \Economic\VatAccount_GetRateAsPercentResponse
     */
    public function setVatAccount_GetRateAsPercentResult($VatAccount_GetRateAsPercentResult)
    {
      $this->VatAccount_GetRateAsPercentResult = $VatAccount_GetRateAsPercentResult;
      return $this;
    }

}

<?php

namespace Economic;

class Quotation_GetDebtorCityResponse
{

    /**
     * @var string $Quotation_GetDebtorCityResult
     */
    protected $Quotation_GetDebtorCityResult = null;

    /**
     * @param string $Quotation_GetDebtorCityResult
     */
    public function __construct($Quotation_GetDebtorCityResult)
    {
      $this->Quotation_GetDebtorCityResult = $Quotation_GetDebtorCityResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDebtorCityResult()
    {
      return $this->Quotation_GetDebtorCityResult;
    }

    /**
     * @param string $Quotation_GetDebtorCityResult
     * @return \Economic\Quotation_GetDebtorCityResponse
     */
    public function setQuotation_GetDebtorCityResult($Quotation_GetDebtorCityResult)
    {
      $this->Quotation_GetDebtorCityResult = $Quotation_GetDebtorCityResult;
      return $this;
    }

}

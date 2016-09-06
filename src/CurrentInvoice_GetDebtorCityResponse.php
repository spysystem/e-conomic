<?php

namespace Economic;

class CurrentInvoice_GetDebtorCityResponse
{

    /**
     * @var string $CurrentInvoice_GetDebtorCityResult
     */
    protected $CurrentInvoice_GetDebtorCityResult = null;

    /**
     * @param string $CurrentInvoice_GetDebtorCityResult
     */
    public function __construct($CurrentInvoice_GetDebtorCityResult)
    {
      $this->CurrentInvoice_GetDebtorCityResult = $CurrentInvoice_GetDebtorCityResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDebtorCityResult()
    {
      return $this->CurrentInvoice_GetDebtorCityResult;
    }

    /**
     * @param string $CurrentInvoice_GetDebtorCityResult
     * @return \Economic\CurrentInvoice_GetDebtorCityResponse
     */
    public function setCurrentInvoice_GetDebtorCityResult($CurrentInvoice_GetDebtorCityResult)
    {
      $this->CurrentInvoice_GetDebtorCityResult = $CurrentInvoice_GetDebtorCityResult;
      return $this;
    }

}

<?php

namespace Economic;

class CurrentInvoice_GetDebtorCountryResponse
{

    /**
     * @var string $CurrentInvoice_GetDebtorCountryResult
     */
    protected $CurrentInvoice_GetDebtorCountryResult = null;

    /**
     * @param string $CurrentInvoice_GetDebtorCountryResult
     */
    public function __construct($CurrentInvoice_GetDebtorCountryResult)
    {
      $this->CurrentInvoice_GetDebtorCountryResult = $CurrentInvoice_GetDebtorCountryResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDebtorCountryResult()
    {
      return $this->CurrentInvoice_GetDebtorCountryResult;
    }

    /**
     * @param string $CurrentInvoice_GetDebtorCountryResult
     * @return \Economic\CurrentInvoice_GetDebtorCountryResponse
     */
    public function setCurrentInvoice_GetDebtorCountryResult($CurrentInvoice_GetDebtorCountryResult)
    {
      $this->CurrentInvoice_GetDebtorCountryResult = $CurrentInvoice_GetDebtorCountryResult;
      return $this;
    }

}

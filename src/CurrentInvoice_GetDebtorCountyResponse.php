<?php

namespace Economic;

class CurrentInvoice_GetDebtorCountyResponse
{

    /**
     * @var string $CurrentInvoice_GetDebtorCountyResult
     */
    protected $CurrentInvoice_GetDebtorCountyResult = null;

    /**
     * @param string $CurrentInvoice_GetDebtorCountyResult
     */
    public function __construct($CurrentInvoice_GetDebtorCountyResult)
    {
      $this->CurrentInvoice_GetDebtorCountyResult = $CurrentInvoice_GetDebtorCountyResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDebtorCountyResult()
    {
      return $this->CurrentInvoice_GetDebtorCountyResult;
    }

    /**
     * @param string $CurrentInvoice_GetDebtorCountyResult
     * @return \Economic\CurrentInvoice_GetDebtorCountyResponse
     */
    public function setCurrentInvoice_GetDebtorCountyResult($CurrentInvoice_GetDebtorCountyResult)
    {
      $this->CurrentInvoice_GetDebtorCountyResult = $CurrentInvoice_GetDebtorCountyResult;
      return $this;
    }

}

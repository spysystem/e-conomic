<?php

namespace Economic;

class CurrentInvoice_GetDebtorPostalCodeResponse
{

    /**
     * @var string $CurrentInvoice_GetDebtorPostalCodeResult
     */
    protected $CurrentInvoice_GetDebtorPostalCodeResult = null;

    /**
     * @param string $CurrentInvoice_GetDebtorPostalCodeResult
     */
    public function __construct($CurrentInvoice_GetDebtorPostalCodeResult)
    {
      $this->CurrentInvoice_GetDebtorPostalCodeResult = $CurrentInvoice_GetDebtorPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDebtorPostalCodeResult()
    {
      return $this->CurrentInvoice_GetDebtorPostalCodeResult;
    }

    /**
     * @param string $CurrentInvoice_GetDebtorPostalCodeResult
     * @return \Economic\CurrentInvoice_GetDebtorPostalCodeResponse
     */
    public function setCurrentInvoice_GetDebtorPostalCodeResult($CurrentInvoice_GetDebtorPostalCodeResult)
    {
      $this->CurrentInvoice_GetDebtorPostalCodeResult = $CurrentInvoice_GetDebtorPostalCodeResult;
      return $this;
    }

}

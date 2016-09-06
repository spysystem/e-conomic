<?php

namespace Economic;

class CurrentInvoice_GetDebtorAddressResponse
{

    /**
     * @var string $CurrentInvoice_GetDebtorAddressResult
     */
    protected $CurrentInvoice_GetDebtorAddressResult = null;

    /**
     * @param string $CurrentInvoice_GetDebtorAddressResult
     */
    public function __construct($CurrentInvoice_GetDebtorAddressResult)
    {
      $this->CurrentInvoice_GetDebtorAddressResult = $CurrentInvoice_GetDebtorAddressResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDebtorAddressResult()
    {
      return $this->CurrentInvoice_GetDebtorAddressResult;
    }

    /**
     * @param string $CurrentInvoice_GetDebtorAddressResult
     * @return \Economic\CurrentInvoice_GetDebtorAddressResponse
     */
    public function setCurrentInvoice_GetDebtorAddressResult($CurrentInvoice_GetDebtorAddressResult)
    {
      $this->CurrentInvoice_GetDebtorAddressResult = $CurrentInvoice_GetDebtorAddressResult;
      return $this;
    }

}

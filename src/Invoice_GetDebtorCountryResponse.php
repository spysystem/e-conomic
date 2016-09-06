<?php

namespace Economic;

class Invoice_GetDebtorCountryResponse
{

    /**
     * @var string $Invoice_GetDebtorCountryResult
     */
    protected $Invoice_GetDebtorCountryResult = null;

    /**
     * @param string $Invoice_GetDebtorCountryResult
     */
    public function __construct($Invoice_GetDebtorCountryResult)
    {
      $this->Invoice_GetDebtorCountryResult = $Invoice_GetDebtorCountryResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDebtorCountryResult()
    {
      return $this->Invoice_GetDebtorCountryResult;
    }

    /**
     * @param string $Invoice_GetDebtorCountryResult
     * @return \Economic\Invoice_GetDebtorCountryResponse
     */
    public function setInvoice_GetDebtorCountryResult($Invoice_GetDebtorCountryResult)
    {
      $this->Invoice_GetDebtorCountryResult = $Invoice_GetDebtorCountryResult;
      return $this;
    }

}

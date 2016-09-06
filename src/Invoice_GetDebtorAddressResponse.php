<?php

namespace Economic;

class Invoice_GetDebtorAddressResponse
{

    /**
     * @var string $Invoice_GetDebtorAddressResult
     */
    protected $Invoice_GetDebtorAddressResult = null;

    /**
     * @param string $Invoice_GetDebtorAddressResult
     */
    public function __construct($Invoice_GetDebtorAddressResult)
    {
      $this->Invoice_GetDebtorAddressResult = $Invoice_GetDebtorAddressResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDebtorAddressResult()
    {
      return $this->Invoice_GetDebtorAddressResult;
    }

    /**
     * @param string $Invoice_GetDebtorAddressResult
     * @return \Economic\Invoice_GetDebtorAddressResponse
     */
    public function setInvoice_GetDebtorAddressResult($Invoice_GetDebtorAddressResult)
    {
      $this->Invoice_GetDebtorAddressResult = $Invoice_GetDebtorAddressResult;
      return $this;
    }

}

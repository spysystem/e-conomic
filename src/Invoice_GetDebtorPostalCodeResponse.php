<?php

namespace Economic;

class Invoice_GetDebtorPostalCodeResponse
{

    /**
     * @var string $Invoice_GetDebtorPostalCodeResult
     */
    protected $Invoice_GetDebtorPostalCodeResult = null;

    /**
     * @param string $Invoice_GetDebtorPostalCodeResult
     */
    public function __construct($Invoice_GetDebtorPostalCodeResult)
    {
      $this->Invoice_GetDebtorPostalCodeResult = $Invoice_GetDebtorPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDebtorPostalCodeResult()
    {
      return $this->Invoice_GetDebtorPostalCodeResult;
    }

    /**
     * @param string $Invoice_GetDebtorPostalCodeResult
     * @return \Economic\Invoice_GetDebtorPostalCodeResponse
     */
    public function setInvoice_GetDebtorPostalCodeResult($Invoice_GetDebtorPostalCodeResult)
    {
      $this->Invoice_GetDebtorPostalCodeResult = $Invoice_GetDebtorPostalCodeResult;
      return $this;
    }

}

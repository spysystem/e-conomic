<?php

namespace Economic;

class Quotation_GetDebtorPostalCodeResponse
{

    /**
     * @var string $Quotation_GetDebtorPostalCodeResult
     */
    protected $Quotation_GetDebtorPostalCodeResult = null;

    /**
     * @param string $Quotation_GetDebtorPostalCodeResult
     */
    public function __construct($Quotation_GetDebtorPostalCodeResult)
    {
      $this->Quotation_GetDebtorPostalCodeResult = $Quotation_GetDebtorPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDebtorPostalCodeResult()
    {
      return $this->Quotation_GetDebtorPostalCodeResult;
    }

    /**
     * @param string $Quotation_GetDebtorPostalCodeResult
     * @return \Economic\Quotation_GetDebtorPostalCodeResponse
     */
    public function setQuotation_GetDebtorPostalCodeResult($Quotation_GetDebtorPostalCodeResult)
    {
      $this->Quotation_GetDebtorPostalCodeResult = $Quotation_GetDebtorPostalCodeResult;
      return $this;
    }

}

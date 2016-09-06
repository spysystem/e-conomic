<?php

namespace Economic;

class Quotation_GetDebtorCountryResponse
{

    /**
     * @var string $Quotation_GetDebtorCountryResult
     */
    protected $Quotation_GetDebtorCountryResult = null;

    /**
     * @param string $Quotation_GetDebtorCountryResult
     */
    public function __construct($Quotation_GetDebtorCountryResult)
    {
      $this->Quotation_GetDebtorCountryResult = $Quotation_GetDebtorCountryResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDebtorCountryResult()
    {
      return $this->Quotation_GetDebtorCountryResult;
    }

    /**
     * @param string $Quotation_GetDebtorCountryResult
     * @return \Economic\Quotation_GetDebtorCountryResponse
     */
    public function setQuotation_GetDebtorCountryResult($Quotation_GetDebtorCountryResult)
    {
      $this->Quotation_GetDebtorCountryResult = $Quotation_GetDebtorCountryResult;
      return $this;
    }

}

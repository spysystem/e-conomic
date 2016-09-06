<?php

namespace Economic;

class Quotation_GetDebtorAddressResponse
{

    /**
     * @var string $Quotation_GetDebtorAddressResult
     */
    protected $Quotation_GetDebtorAddressResult = null;

    /**
     * @param string $Quotation_GetDebtorAddressResult
     */
    public function __construct($Quotation_GetDebtorAddressResult)
    {
      $this->Quotation_GetDebtorAddressResult = $Quotation_GetDebtorAddressResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDebtorAddressResult()
    {
      return $this->Quotation_GetDebtorAddressResult;
    }

    /**
     * @param string $Quotation_GetDebtorAddressResult
     * @return \Economic\Quotation_GetDebtorAddressResponse
     */
    public function setQuotation_GetDebtorAddressResult($Quotation_GetDebtorAddressResult)
    {
      $this->Quotation_GetDebtorAddressResult = $Quotation_GetDebtorAddressResult;
      return $this;
    }

}

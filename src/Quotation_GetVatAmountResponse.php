<?php

namespace Economic;

class Quotation_GetVatAmountResponse
{

    /**
     * @var float $Quotation_GetVatAmountResult
     */
    protected $Quotation_GetVatAmountResult = null;

    /**
     * @param float $Quotation_GetVatAmountResult
     */
    public function __construct($Quotation_GetVatAmountResult)
    {
      $this->Quotation_GetVatAmountResult = $Quotation_GetVatAmountResult;
    }

    /**
     * @return float
     */
    public function getQuotation_GetVatAmountResult()
    {
      return $this->Quotation_GetVatAmountResult;
    }

    /**
     * @param float $Quotation_GetVatAmountResult
     * @return \Economic\Quotation_GetVatAmountResponse
     */
    public function setQuotation_GetVatAmountResult($Quotation_GetVatAmountResult)
    {
      $this->Quotation_GetVatAmountResult = $Quotation_GetVatAmountResult;
      return $this;
    }

}

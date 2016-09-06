<?php

namespace Economic;

class Quotation_GetDataResponse
{

    /**
     * @var QuotationData $Quotation_GetDataResult
     */
    protected $Quotation_GetDataResult = null;

    /**
     * @param QuotationData $Quotation_GetDataResult
     */
    public function __construct($Quotation_GetDataResult)
    {
      $this->Quotation_GetDataResult = $Quotation_GetDataResult;
    }

    /**
     * @return QuotationData
     */
    public function getQuotation_GetDataResult()
    {
      return $this->Quotation_GetDataResult;
    }

    /**
     * @param QuotationData $Quotation_GetDataResult
     * @return \Economic\Quotation_GetDataResponse
     */
    public function setQuotation_GetDataResult($Quotation_GetDataResult)
    {
      $this->Quotation_GetDataResult = $Quotation_GetDataResult;
      return $this;
    }

}

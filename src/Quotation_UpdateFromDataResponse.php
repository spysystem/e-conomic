<?php

namespace Economic;

class Quotation_UpdateFromDataResponse
{

    /**
     * @var QuotationHandle $Quotation_UpdateFromDataResult
     */
    protected $Quotation_UpdateFromDataResult = null;

    /**
     * @param QuotationHandle $Quotation_UpdateFromDataResult
     */
    public function __construct($Quotation_UpdateFromDataResult)
    {
      $this->Quotation_UpdateFromDataResult = $Quotation_UpdateFromDataResult;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotation_UpdateFromDataResult()
    {
      return $this->Quotation_UpdateFromDataResult;
    }

    /**
     * @param QuotationHandle $Quotation_UpdateFromDataResult
     * @return \Economic\Quotation_UpdateFromDataResponse
     */
    public function setQuotation_UpdateFromDataResult($Quotation_UpdateFromDataResult)
    {
      $this->Quotation_UpdateFromDataResult = $Quotation_UpdateFromDataResult;
      return $this;
    }

}

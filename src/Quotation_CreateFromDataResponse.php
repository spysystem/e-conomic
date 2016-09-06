<?php

namespace Economic;

class Quotation_CreateFromDataResponse
{

    /**
     * @var QuotationHandle $Quotation_CreateFromDataResult
     */
    protected $Quotation_CreateFromDataResult = null;

    /**
     * @param QuotationHandle $Quotation_CreateFromDataResult
     */
    public function __construct($Quotation_CreateFromDataResult)
    {
      $this->Quotation_CreateFromDataResult = $Quotation_CreateFromDataResult;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotation_CreateFromDataResult()
    {
      return $this->Quotation_CreateFromDataResult;
    }

    /**
     * @param QuotationHandle $Quotation_CreateFromDataResult
     * @return \Economic\Quotation_CreateFromDataResponse
     */
    public function setQuotation_CreateFromDataResult($Quotation_CreateFromDataResult)
    {
      $this->Quotation_CreateFromDataResult = $Quotation_CreateFromDataResult;
      return $this;
    }

}

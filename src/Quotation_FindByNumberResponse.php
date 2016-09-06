<?php

namespace Economic;

class Quotation_FindByNumberResponse
{

    /**
     * @var QuotationHandle $Quotation_FindByNumberResult
     */
    protected $Quotation_FindByNumberResult = null;

    /**
     * @param QuotationHandle $Quotation_FindByNumberResult
     */
    public function __construct($Quotation_FindByNumberResult)
    {
      $this->Quotation_FindByNumberResult = $Quotation_FindByNumberResult;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotation_FindByNumberResult()
    {
      return $this->Quotation_FindByNumberResult;
    }

    /**
     * @param QuotationHandle $Quotation_FindByNumberResult
     * @return \Economic\Quotation_FindByNumberResponse
     */
    public function setQuotation_FindByNumberResult($Quotation_FindByNumberResult)
    {
      $this->Quotation_FindByNumberResult = $Quotation_FindByNumberResult;
      return $this;
    }

}

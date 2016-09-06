<?php

namespace Economic;

class Quotation_CreateResponse
{

    /**
     * @var QuotationHandle $Quotation_CreateResult
     */
    protected $Quotation_CreateResult = null;

    /**
     * @param QuotationHandle $Quotation_CreateResult
     */
    public function __construct($Quotation_CreateResult)
    {
      $this->Quotation_CreateResult = $Quotation_CreateResult;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotation_CreateResult()
    {
      return $this->Quotation_CreateResult;
    }

    /**
     * @param QuotationHandle $Quotation_CreateResult
     * @return \Economic\Quotation_CreateResponse
     */
    public function setQuotation_CreateResult($Quotation_CreateResult)
    {
      $this->Quotation_CreateResult = $Quotation_CreateResult;
      return $this;
    }

}

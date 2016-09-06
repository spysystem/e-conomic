<?php

namespace Economic;

class Quotation_GetIsVatIncludedResponse
{

    /**
     * @var boolean $Quotation_GetIsVatIncludedResult
     */
    protected $Quotation_GetIsVatIncludedResult = null;

    /**
     * @param boolean $Quotation_GetIsVatIncludedResult
     */
    public function __construct($Quotation_GetIsVatIncludedResult)
    {
      $this->Quotation_GetIsVatIncludedResult = $Quotation_GetIsVatIncludedResult;
    }

    /**
     * @return boolean
     */
    public function getQuotation_GetIsVatIncludedResult()
    {
      return $this->Quotation_GetIsVatIncludedResult;
    }

    /**
     * @param boolean $Quotation_GetIsVatIncludedResult
     * @return \Economic\Quotation_GetIsVatIncludedResponse
     */
    public function setQuotation_GetIsVatIncludedResult($Quotation_GetIsVatIncludedResult)
    {
      $this->Quotation_GetIsVatIncludedResult = $Quotation_GetIsVatIncludedResult;
      return $this;
    }

}

<?php

namespace Economic;

class Quotation_GetAllCurrentResponse
{

    /**
     * @var ArrayOfQuotationHandle $Quotation_GetAllCurrentResult
     */
    protected $Quotation_GetAllCurrentResult = null;

    /**
     * @param ArrayOfQuotationHandle $Quotation_GetAllCurrentResult
     */
    public function __construct($Quotation_GetAllCurrentResult)
    {
      $this->Quotation_GetAllCurrentResult = $Quotation_GetAllCurrentResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotation_GetAllCurrentResult()
    {
      return $this->Quotation_GetAllCurrentResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Quotation_GetAllCurrentResult
     * @return \Economic\Quotation_GetAllCurrentResponse
     */
    public function setQuotation_GetAllCurrentResult($Quotation_GetAllCurrentResult)
    {
      $this->Quotation_GetAllCurrentResult = $Quotation_GetAllCurrentResult;
      return $this;
    }

}

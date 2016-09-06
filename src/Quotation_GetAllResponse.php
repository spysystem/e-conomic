<?php

namespace Economic;

class Quotation_GetAllResponse
{

    /**
     * @var ArrayOfQuotationHandle $Quotation_GetAllResult
     */
    protected $Quotation_GetAllResult = null;

    /**
     * @param ArrayOfQuotationHandle $Quotation_GetAllResult
     */
    public function __construct($Quotation_GetAllResult)
    {
      $this->Quotation_GetAllResult = $Quotation_GetAllResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotation_GetAllResult()
    {
      return $this->Quotation_GetAllResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Quotation_GetAllResult
     * @return \Economic\Quotation_GetAllResponse
     */
    public function setQuotation_GetAllResult($Quotation_GetAllResult)
    {
      $this->Quotation_GetAllResult = $Quotation_GetAllResult;
      return $this;
    }

}

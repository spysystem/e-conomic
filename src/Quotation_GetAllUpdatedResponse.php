<?php

namespace Economic;

class Quotation_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfQuotationHandle $Quotation_GetAllUpdatedResult
     */
    protected $Quotation_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfQuotationHandle $Quotation_GetAllUpdatedResult
     */
    public function __construct($Quotation_GetAllUpdatedResult)
    {
      $this->Quotation_GetAllUpdatedResult = $Quotation_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotation_GetAllUpdatedResult()
    {
      return $this->Quotation_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Quotation_GetAllUpdatedResult
     * @return \Economic\Quotation_GetAllUpdatedResponse
     */
    public function setQuotation_GetAllUpdatedResult($Quotation_GetAllUpdatedResult)
    {
      $this->Quotation_GetAllUpdatedResult = $Quotation_GetAllUpdatedResult;
      return $this;
    }

}

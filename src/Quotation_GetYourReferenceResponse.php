<?php

namespace Economic;

class Quotation_GetYourReferenceResponse
{

    /**
     * @var DebtorContactHandle $Quotation_GetYourReferenceResult
     */
    protected $Quotation_GetYourReferenceResult = null;

    /**
     * @param DebtorContactHandle $Quotation_GetYourReferenceResult
     */
    public function __construct($Quotation_GetYourReferenceResult)
    {
      $this->Quotation_GetYourReferenceResult = $Quotation_GetYourReferenceResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getQuotation_GetYourReferenceResult()
    {
      return $this->Quotation_GetYourReferenceResult;
    }

    /**
     * @param DebtorContactHandle $Quotation_GetYourReferenceResult
     * @return \Economic\Quotation_GetYourReferenceResponse
     */
    public function setQuotation_GetYourReferenceResult($Quotation_GetYourReferenceResult)
    {
      $this->Quotation_GetYourReferenceResult = $Quotation_GetYourReferenceResult;
      return $this;
    }

}

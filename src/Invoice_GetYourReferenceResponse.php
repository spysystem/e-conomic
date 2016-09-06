<?php

namespace Economic;

class Invoice_GetYourReferenceResponse
{

    /**
     * @var DebtorContactHandle $Invoice_GetYourReferenceResult
     */
    protected $Invoice_GetYourReferenceResult = null;

    /**
     * @param DebtorContactHandle $Invoice_GetYourReferenceResult
     */
    public function __construct($Invoice_GetYourReferenceResult)
    {
      $this->Invoice_GetYourReferenceResult = $Invoice_GetYourReferenceResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getInvoice_GetYourReferenceResult()
    {
      return $this->Invoice_GetYourReferenceResult;
    }

    /**
     * @param DebtorContactHandle $Invoice_GetYourReferenceResult
     * @return \Economic\Invoice_GetYourReferenceResponse
     */
    public function setInvoice_GetYourReferenceResult($Invoice_GetYourReferenceResult)
    {
      $this->Invoice_GetYourReferenceResult = $Invoice_GetYourReferenceResult;
      return $this;
    }

}

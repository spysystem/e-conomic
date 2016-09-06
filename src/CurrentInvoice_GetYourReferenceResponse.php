<?php

namespace Economic;

class CurrentInvoice_GetYourReferenceResponse
{

    /**
     * @var DebtorContactHandle $CurrentInvoice_GetYourReferenceResult
     */
    protected $CurrentInvoice_GetYourReferenceResult = null;

    /**
     * @param DebtorContactHandle $CurrentInvoice_GetYourReferenceResult
     */
    public function __construct($CurrentInvoice_GetYourReferenceResult)
    {
      $this->CurrentInvoice_GetYourReferenceResult = $CurrentInvoice_GetYourReferenceResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getCurrentInvoice_GetYourReferenceResult()
    {
      return $this->CurrentInvoice_GetYourReferenceResult;
    }

    /**
     * @param DebtorContactHandle $CurrentInvoice_GetYourReferenceResult
     * @return \Economic\CurrentInvoice_GetYourReferenceResponse
     */
    public function setCurrentInvoice_GetYourReferenceResult($CurrentInvoice_GetYourReferenceResult)
    {
      $this->CurrentInvoice_GetYourReferenceResult = $CurrentInvoice_GetYourReferenceResult;
      return $this;
    }

}

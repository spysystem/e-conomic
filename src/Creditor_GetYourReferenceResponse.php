<?php

namespace Economic;

class Creditor_GetYourReferenceResponse
{

    /**
     * @var CreditorContactHandle $Creditor_GetYourReferenceResult
     */
    protected $Creditor_GetYourReferenceResult = null;

    /**
     * @param CreditorContactHandle $Creditor_GetYourReferenceResult
     */
    public function __construct($Creditor_GetYourReferenceResult)
    {
      $this->Creditor_GetYourReferenceResult = $Creditor_GetYourReferenceResult;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getCreditor_GetYourReferenceResult()
    {
      return $this->Creditor_GetYourReferenceResult;
    }

    /**
     * @param CreditorContactHandle $Creditor_GetYourReferenceResult
     * @return \Economic\Creditor_GetYourReferenceResponse
     */
    public function setCreditor_GetYourReferenceResult($Creditor_GetYourReferenceResult)
    {
      $this->Creditor_GetYourReferenceResult = $Creditor_GetYourReferenceResult;
      return $this;
    }

}

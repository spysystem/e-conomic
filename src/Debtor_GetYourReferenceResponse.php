<?php

namespace Economic;

class Debtor_GetYourReferenceResponse
{

    /**
     * @var DebtorContactHandle $Debtor_GetYourReferenceResult
     */
    protected $Debtor_GetYourReferenceResult = null;

    /**
     * @param DebtorContactHandle $Debtor_GetYourReferenceResult
     */
    public function __construct($Debtor_GetYourReferenceResult)
    {
      $this->Debtor_GetYourReferenceResult = $Debtor_GetYourReferenceResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getDebtor_GetYourReferenceResult()
    {
      return $this->Debtor_GetYourReferenceResult;
    }

    /**
     * @param DebtorContactHandle $Debtor_GetYourReferenceResult
     * @return \Economic\Debtor_GetYourReferenceResponse
     */
    public function setDebtor_GetYourReferenceResult($Debtor_GetYourReferenceResult)
    {
      $this->Debtor_GetYourReferenceResult = $Debtor_GetYourReferenceResult;
      return $this;
    }

}

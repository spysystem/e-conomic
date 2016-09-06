<?php

namespace Economic;

class Creditor_GetOurReferenceResponse
{

    /**
     * @var EmployeeHandle $Creditor_GetOurReferenceResult
     */
    protected $Creditor_GetOurReferenceResult = null;

    /**
     * @param EmployeeHandle $Creditor_GetOurReferenceResult
     */
    public function __construct($Creditor_GetOurReferenceResult)
    {
      $this->Creditor_GetOurReferenceResult = $Creditor_GetOurReferenceResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getCreditor_GetOurReferenceResult()
    {
      return $this->Creditor_GetOurReferenceResult;
    }

    /**
     * @param EmployeeHandle $Creditor_GetOurReferenceResult
     * @return \Economic\Creditor_GetOurReferenceResponse
     */
    public function setCreditor_GetOurReferenceResult($Creditor_GetOurReferenceResult)
    {
      $this->Creditor_GetOurReferenceResult = $Creditor_GetOurReferenceResult;
      return $this;
    }

}

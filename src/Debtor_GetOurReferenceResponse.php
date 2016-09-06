<?php

namespace Economic;

class Debtor_GetOurReferenceResponse
{

    /**
     * @var EmployeeHandle $Debtor_GetOurReferenceResult
     */
    protected $Debtor_GetOurReferenceResult = null;

    /**
     * @param EmployeeHandle $Debtor_GetOurReferenceResult
     */
    public function __construct($Debtor_GetOurReferenceResult)
    {
      $this->Debtor_GetOurReferenceResult = $Debtor_GetOurReferenceResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getDebtor_GetOurReferenceResult()
    {
      return $this->Debtor_GetOurReferenceResult;
    }

    /**
     * @param EmployeeHandle $Debtor_GetOurReferenceResult
     * @return \Economic\Debtor_GetOurReferenceResponse
     */
    public function setDebtor_GetOurReferenceResult($Debtor_GetOurReferenceResult)
    {
      $this->Debtor_GetOurReferenceResult = $Debtor_GetOurReferenceResult;
      return $this;
    }

}

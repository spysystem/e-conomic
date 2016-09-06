<?php

namespace Economic;

class CurrentInvoice_GetOurReferenceResponse
{

    /**
     * @var EmployeeHandle $CurrentInvoice_GetOurReferenceResult
     */
    protected $CurrentInvoice_GetOurReferenceResult = null;

    /**
     * @param EmployeeHandle $CurrentInvoice_GetOurReferenceResult
     */
    public function __construct($CurrentInvoice_GetOurReferenceResult)
    {
      $this->CurrentInvoice_GetOurReferenceResult = $CurrentInvoice_GetOurReferenceResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getCurrentInvoice_GetOurReferenceResult()
    {
      return $this->CurrentInvoice_GetOurReferenceResult;
    }

    /**
     * @param EmployeeHandle $CurrentInvoice_GetOurReferenceResult
     * @return \Economic\CurrentInvoice_GetOurReferenceResponse
     */
    public function setCurrentInvoice_GetOurReferenceResult($CurrentInvoice_GetOurReferenceResult)
    {
      $this->CurrentInvoice_GetOurReferenceResult = $CurrentInvoice_GetOurReferenceResult;
      return $this;
    }

}

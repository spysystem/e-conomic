<?php

namespace Economic;

class Invoice_GetOurReferenceResponse
{

    /**
     * @var EmployeeHandle $Invoice_GetOurReferenceResult
     */
    protected $Invoice_GetOurReferenceResult = null;

    /**
     * @param EmployeeHandle $Invoice_GetOurReferenceResult
     */
    public function __construct($Invoice_GetOurReferenceResult)
    {
      $this->Invoice_GetOurReferenceResult = $Invoice_GetOurReferenceResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getInvoice_GetOurReferenceResult()
    {
      return $this->Invoice_GetOurReferenceResult;
    }

    /**
     * @param EmployeeHandle $Invoice_GetOurReferenceResult
     * @return \Economic\Invoice_GetOurReferenceResponse
     */
    public function setInvoice_GetOurReferenceResult($Invoice_GetOurReferenceResult)
    {
      $this->Invoice_GetOurReferenceResult = $Invoice_GetOurReferenceResult;
      return $this;
    }

}

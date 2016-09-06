<?php

namespace Economic;

class Quotation_GetOurReferenceResponse
{

    /**
     * @var EmployeeHandle $Quotation_GetOurReferenceResult
     */
    protected $Quotation_GetOurReferenceResult = null;

    /**
     * @param EmployeeHandle $Quotation_GetOurReferenceResult
     */
    public function __construct($Quotation_GetOurReferenceResult)
    {
      $this->Quotation_GetOurReferenceResult = $Quotation_GetOurReferenceResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getQuotation_GetOurReferenceResult()
    {
      return $this->Quotation_GetOurReferenceResult;
    }

    /**
     * @param EmployeeHandle $Quotation_GetOurReferenceResult
     * @return \Economic\Quotation_GetOurReferenceResponse
     */
    public function setQuotation_GetOurReferenceResult($Quotation_GetOurReferenceResult)
    {
      $this->Quotation_GetOurReferenceResult = $Quotation_GetOurReferenceResult;
      return $this;
    }

}

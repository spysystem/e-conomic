<?php

namespace Economic;

class CurrentInvoice_GetOtherReferenceResponse
{

    /**
     * @var string $CurrentInvoice_GetOtherReferenceResult
     */
    protected $CurrentInvoice_GetOtherReferenceResult = null;

    /**
     * @param string $CurrentInvoice_GetOtherReferenceResult
     */
    public function __construct($CurrentInvoice_GetOtherReferenceResult)
    {
      $this->CurrentInvoice_GetOtherReferenceResult = $CurrentInvoice_GetOtherReferenceResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetOtherReferenceResult()
    {
      return $this->CurrentInvoice_GetOtherReferenceResult;
    }

    /**
     * @param string $CurrentInvoice_GetOtherReferenceResult
     * @return \Economic\CurrentInvoice_GetOtherReferenceResponse
     */
    public function setCurrentInvoice_GetOtherReferenceResult($CurrentInvoice_GetOtherReferenceResult)
    {
      $this->CurrentInvoice_GetOtherReferenceResult = $CurrentInvoice_GetOtherReferenceResult;
      return $this;
    }

}

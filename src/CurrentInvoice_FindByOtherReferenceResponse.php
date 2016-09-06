<?php

namespace Economic;

class CurrentInvoice_FindByOtherReferenceResponse
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByOtherReferenceResult
     */
    protected $CurrentInvoice_FindByOtherReferenceResult = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByOtherReferenceResult
     */
    public function __construct($CurrentInvoice_FindByOtherReferenceResult)
    {
      $this->CurrentInvoice_FindByOtherReferenceResult = $CurrentInvoice_FindByOtherReferenceResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getCurrentInvoice_FindByOtherReferenceResult()
    {
      return $this->CurrentInvoice_FindByOtherReferenceResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByOtherReferenceResult
     * @return \Economic\CurrentInvoice_FindByOtherReferenceResponse
     */
    public function setCurrentInvoice_FindByOtherReferenceResult($CurrentInvoice_FindByOtherReferenceResult)
    {
      $this->CurrentInvoice_FindByOtherReferenceResult = $CurrentInvoice_FindByOtherReferenceResult;
      return $this;
    }

}

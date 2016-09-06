<?php

namespace Economic;

class CurrentInvoice_FindByOurReferenceResponse
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByOurReferenceResult
     */
    protected $CurrentInvoice_FindByOurReferenceResult = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByOurReferenceResult
     */
    public function __construct($CurrentInvoice_FindByOurReferenceResult)
    {
      $this->CurrentInvoice_FindByOurReferenceResult = $CurrentInvoice_FindByOurReferenceResult;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getCurrentInvoice_FindByOurReferenceResult()
    {
      return $this->CurrentInvoice_FindByOurReferenceResult;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $CurrentInvoice_FindByOurReferenceResult
     * @return \Economic\CurrentInvoice_FindByOurReferenceResponse
     */
    public function setCurrentInvoice_FindByOurReferenceResult($CurrentInvoice_FindByOurReferenceResult)
    {
      $this->CurrentInvoice_FindByOurReferenceResult = $CurrentInvoice_FindByOurReferenceResult;
      return $this;
    }

}

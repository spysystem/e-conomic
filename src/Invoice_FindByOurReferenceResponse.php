<?php

namespace Economic;

class Invoice_FindByOurReferenceResponse
{

    /**
     * @var ArrayOfInvoiceHandle $Invoice_FindByOurReferenceResult
     */
    protected $Invoice_FindByOurReferenceResult = null;

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByOurReferenceResult
     */
    public function __construct($Invoice_FindByOurReferenceResult)
    {
      $this->Invoice_FindByOurReferenceResult = $Invoice_FindByOurReferenceResult;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getInvoice_FindByOurReferenceResult()
    {
      return $this->Invoice_FindByOurReferenceResult;
    }

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByOurReferenceResult
     * @return \Economic\Invoice_FindByOurReferenceResponse
     */
    public function setInvoice_FindByOurReferenceResult($Invoice_FindByOurReferenceResult)
    {
      $this->Invoice_FindByOurReferenceResult = $Invoice_FindByOurReferenceResult;
      return $this;
    }

}

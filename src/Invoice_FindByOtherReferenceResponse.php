<?php

namespace Economic;

class Invoice_FindByOtherReferenceResponse
{

    /**
     * @var ArrayOfInvoiceHandle $Invoice_FindByOtherReferenceResult
     */
    protected $Invoice_FindByOtherReferenceResult = null;

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByOtherReferenceResult
     */
    public function __construct($Invoice_FindByOtherReferenceResult)
    {
      $this->Invoice_FindByOtherReferenceResult = $Invoice_FindByOtherReferenceResult;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getInvoice_FindByOtherReferenceResult()
    {
      return $this->Invoice_FindByOtherReferenceResult;
    }

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByOtherReferenceResult
     * @return \Economic\Invoice_FindByOtherReferenceResponse
     */
    public function setInvoice_FindByOtherReferenceResult($Invoice_FindByOtherReferenceResult)
    {
      $this->Invoice_FindByOtherReferenceResult = $Invoice_FindByOtherReferenceResult;
      return $this;
    }

}

<?php

namespace Economic;

class Invoice_GetOtherReferenceResponse
{

    /**
     * @var string $Invoice_GetOtherReferenceResult
     */
    protected $Invoice_GetOtherReferenceResult = null;

    /**
     * @param string $Invoice_GetOtherReferenceResult
     */
    public function __construct($Invoice_GetOtherReferenceResult)
    {
      $this->Invoice_GetOtherReferenceResult = $Invoice_GetOtherReferenceResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetOtherReferenceResult()
    {
      return $this->Invoice_GetOtherReferenceResult;
    }

    /**
     * @param string $Invoice_GetOtherReferenceResult
     * @return \Economic\Invoice_GetOtherReferenceResponse
     */
    public function setInvoice_GetOtherReferenceResult($Invoice_GetOtherReferenceResult)
    {
      $this->Invoice_GetOtherReferenceResult = $Invoice_GetOtherReferenceResult;
      return $this;
    }

}

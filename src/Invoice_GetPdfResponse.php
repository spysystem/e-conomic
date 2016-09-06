<?php

namespace Economic;

class Invoice_GetPdfResponse
{

    /**
     * @var base64Binary $Invoice_GetPdfResult
     */
    protected $Invoice_GetPdfResult = null;

    /**
     * @param base64Binary $Invoice_GetPdfResult
     */
    public function __construct($Invoice_GetPdfResult)
    {
      $this->Invoice_GetPdfResult = $Invoice_GetPdfResult;
    }

    /**
     * @return base64Binary
     */
    public function getInvoice_GetPdfResult()
    {
      return $this->Invoice_GetPdfResult;
    }

    /**
     * @param base64Binary $Invoice_GetPdfResult
     * @return \Economic\Invoice_GetPdfResponse
     */
    public function setInvoice_GetPdfResult($Invoice_GetPdfResult)
    {
      $this->Invoice_GetPdfResult = $Invoice_GetPdfResult;
      return $this;
    }

}

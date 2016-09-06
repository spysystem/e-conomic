<?php

namespace Economic;

class CurrentInvoice_GetPdfResponse
{

    /**
     * @var base64Binary $CurrentInvoice_GetPdfResult
     */
    protected $CurrentInvoice_GetPdfResult = null;

    /**
     * @param base64Binary $CurrentInvoice_GetPdfResult
     */
    public function __construct($CurrentInvoice_GetPdfResult)
    {
      $this->CurrentInvoice_GetPdfResult = $CurrentInvoice_GetPdfResult;
    }

    /**
     * @return base64Binary
     */
    public function getCurrentInvoice_GetPdfResult()
    {
      return $this->CurrentInvoice_GetPdfResult;
    }

    /**
     * @param base64Binary $CurrentInvoice_GetPdfResult
     * @return \Economic\CurrentInvoice_GetPdfResponse
     */
    public function setCurrentInvoice_GetPdfResult($CurrentInvoice_GetPdfResult)
    {
      $this->CurrentInvoice_GetPdfResult = $CurrentInvoice_GetPdfResult;
      return $this;
    }

}

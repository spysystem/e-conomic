<?php

namespace Economic;

class Quotation_GetPdfResponse
{

    /**
     * @var base64Binary $Quotation_GetPdfResult
     */
    protected $Quotation_GetPdfResult = null;

    /**
     * @param base64Binary $Quotation_GetPdfResult
     */
    public function __construct($Quotation_GetPdfResult)
    {
      $this->Quotation_GetPdfResult = $Quotation_GetPdfResult;
    }

    /**
     * @return base64Binary
     */
    public function getQuotation_GetPdfResult()
    {
      return $this->Quotation_GetPdfResult;
    }

    /**
     * @param base64Binary $Quotation_GetPdfResult
     * @return \Economic\Quotation_GetPdfResponse
     */
    public function setQuotation_GetPdfResult($Quotation_GetPdfResult)
    {
      $this->Quotation_GetPdfResult = $Quotation_GetPdfResult;
      return $this;
    }

}

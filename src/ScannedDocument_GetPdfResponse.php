<?php

namespace Economic;

class ScannedDocument_GetPdfResponse
{

    /**
     * @var base64Binary $ScannedDocument_GetPdfResult
     */
    protected $ScannedDocument_GetPdfResult = null;

    /**
     * @param base64Binary $ScannedDocument_GetPdfResult
     */
    public function __construct($ScannedDocument_GetPdfResult)
    {
      $this->ScannedDocument_GetPdfResult = $ScannedDocument_GetPdfResult;
    }

    /**
     * @return base64Binary
     */
    public function getScannedDocument_GetPdfResult()
    {
      return $this->ScannedDocument_GetPdfResult;
    }

    /**
     * @param base64Binary $ScannedDocument_GetPdfResult
     * @return \Economic\ScannedDocument_GetPdfResponse
     */
    public function setScannedDocument_GetPdfResult($ScannedDocument_GetPdfResult)
    {
      $this->ScannedDocument_GetPdfResult = $ScannedDocument_GetPdfResult;
      return $this;
    }

}

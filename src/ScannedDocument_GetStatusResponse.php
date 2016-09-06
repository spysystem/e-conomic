<?php

namespace Economic;

class ScannedDocument_GetStatusResponse
{

    /**
     * @var DocumentStatus $ScannedDocument_GetStatusResult
     */
    protected $ScannedDocument_GetStatusResult = null;

    /**
     * @param DocumentStatus $ScannedDocument_GetStatusResult
     */
    public function __construct($ScannedDocument_GetStatusResult)
    {
      $this->ScannedDocument_GetStatusResult = $ScannedDocument_GetStatusResult;
    }

    /**
     * @return DocumentStatus
     */
    public function getScannedDocument_GetStatusResult()
    {
      return $this->ScannedDocument_GetStatusResult;
    }

    /**
     * @param DocumentStatus $ScannedDocument_GetStatusResult
     * @return \Economic\ScannedDocument_GetStatusResponse
     */
    public function setScannedDocument_GetStatusResult($ScannedDocument_GetStatusResult)
    {
      $this->ScannedDocument_GetStatusResult = $ScannedDocument_GetStatusResult;
      return $this;
    }

}

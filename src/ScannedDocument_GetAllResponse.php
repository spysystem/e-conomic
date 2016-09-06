<?php

namespace Economic;

class ScannedDocument_GetAllResponse
{

    /**
     * @var ArrayOfScannedDocumentHandle $ScannedDocument_GetAllResult
     */
    protected $ScannedDocument_GetAllResult = null;

    /**
     * @param ArrayOfScannedDocumentHandle $ScannedDocument_GetAllResult
     */
    public function __construct($ScannedDocument_GetAllResult)
    {
      $this->ScannedDocument_GetAllResult = $ScannedDocument_GetAllResult;
    }

    /**
     * @return ArrayOfScannedDocumentHandle
     */
    public function getScannedDocument_GetAllResult()
    {
      return $this->ScannedDocument_GetAllResult;
    }

    /**
     * @param ArrayOfScannedDocumentHandle $ScannedDocument_GetAllResult
     * @return \Economic\ScannedDocument_GetAllResponse
     */
    public function setScannedDocument_GetAllResult($ScannedDocument_GetAllResult)
    {
      $this->ScannedDocument_GetAllResult = $ScannedDocument_GetAllResult;
      return $this;
    }

}

<?php

namespace Economic;

class ScannedDocument_GetDataResponse
{

    /**
     * @var ScannedDocumentData $ScannedDocument_GetDataResult
     */
    protected $ScannedDocument_GetDataResult = null;

    /**
     * @param ScannedDocumentData $ScannedDocument_GetDataResult
     */
    public function __construct($ScannedDocument_GetDataResult)
    {
      $this->ScannedDocument_GetDataResult = $ScannedDocument_GetDataResult;
    }

    /**
     * @return ScannedDocumentData
     */
    public function getScannedDocument_GetDataResult()
    {
      return $this->ScannedDocument_GetDataResult;
    }

    /**
     * @param ScannedDocumentData $ScannedDocument_GetDataResult
     * @return \Economic\ScannedDocument_GetDataResponse
     */
    public function setScannedDocument_GetDataResult($ScannedDocument_GetDataResult)
    {
      $this->ScannedDocument_GetDataResult = $ScannedDocument_GetDataResult;
      return $this;
    }

}

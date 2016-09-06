<?php

namespace Economic;

class ScannedDocument_GetDataArrayResponse
{

    /**
     * @var ArrayOfScannedDocumentData $ScannedDocument_GetDataArrayResult
     */
    protected $ScannedDocument_GetDataArrayResult = null;

    /**
     * @param ArrayOfScannedDocumentData $ScannedDocument_GetDataArrayResult
     */
    public function __construct($ScannedDocument_GetDataArrayResult)
    {
      $this->ScannedDocument_GetDataArrayResult = $ScannedDocument_GetDataArrayResult;
    }

    /**
     * @return ArrayOfScannedDocumentData
     */
    public function getScannedDocument_GetDataArrayResult()
    {
      return $this->ScannedDocument_GetDataArrayResult;
    }

    /**
     * @param ArrayOfScannedDocumentData $ScannedDocument_GetDataArrayResult
     * @return \Economic\ScannedDocument_GetDataArrayResponse
     */
    public function setScannedDocument_GetDataArrayResult($ScannedDocument_GetDataArrayResult)
    {
      $this->ScannedDocument_GetDataArrayResult = $ScannedDocument_GetDataArrayResult;
      return $this;
    }

}

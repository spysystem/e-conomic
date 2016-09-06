<?php

namespace Economic;

class ScannedDocument_GetNumber
{

    /**
     * @var ScannedDocumentHandle $scannedDocumentHandle
     */
    protected $scannedDocumentHandle = null;

    /**
     * @param ScannedDocumentHandle $scannedDocumentHandle
     */
    public function __construct($scannedDocumentHandle)
    {
      $this->scannedDocumentHandle = $scannedDocumentHandle;
    }

    /**
     * @return ScannedDocumentHandle
     */
    public function getScannedDocumentHandle()
    {
      return $this->scannedDocumentHandle;
    }

    /**
     * @param ScannedDocumentHandle $scannedDocumentHandle
     * @return \Economic\ScannedDocument_GetNumber
     */
    public function setScannedDocumentHandle($scannedDocumentHandle)
    {
      $this->scannedDocumentHandle = $scannedDocumentHandle;
      return $this;
    }

}

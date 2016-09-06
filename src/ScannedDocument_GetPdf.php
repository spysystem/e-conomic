<?php

namespace Economic;

class ScannedDocument_GetPdf
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
     * @return \Economic\ScannedDocument_GetPdf
     */
    public function setScannedDocumentHandle($scannedDocumentHandle)
    {
      $this->scannedDocumentHandle = $scannedDocumentHandle;
      return $this;
    }

}

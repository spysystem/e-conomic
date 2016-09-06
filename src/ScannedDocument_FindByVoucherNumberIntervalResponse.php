<?php

namespace Economic;

class ScannedDocument_FindByVoucherNumberIntervalResponse
{

    /**
     * @var ArrayOfScannedDocumentHandle $ScannedDocument_FindByVoucherNumberIntervalResult
     */
    protected $ScannedDocument_FindByVoucherNumberIntervalResult = null;

    /**
     * @param ArrayOfScannedDocumentHandle $ScannedDocument_FindByVoucherNumberIntervalResult
     */
    public function __construct($ScannedDocument_FindByVoucherNumberIntervalResult)
    {
      $this->ScannedDocument_FindByVoucherNumberIntervalResult = $ScannedDocument_FindByVoucherNumberIntervalResult;
    }

    /**
     * @return ArrayOfScannedDocumentHandle
     */
    public function getScannedDocument_FindByVoucherNumberIntervalResult()
    {
      return $this->ScannedDocument_FindByVoucherNumberIntervalResult;
    }

    /**
     * @param ArrayOfScannedDocumentHandle $ScannedDocument_FindByVoucherNumberIntervalResult
     * @return \Economic\ScannedDocument_FindByVoucherNumberIntervalResponse
     */
    public function setScannedDocument_FindByVoucherNumberIntervalResult($ScannedDocument_FindByVoucherNumberIntervalResult)
    {
      $this->ScannedDocument_FindByVoucherNumberIntervalResult = $ScannedDocument_FindByVoucherNumberIntervalResult;
      return $this;
    }

}

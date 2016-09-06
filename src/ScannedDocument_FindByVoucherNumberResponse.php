<?php

namespace Economic;

class ScannedDocument_FindByVoucherNumberResponse
{

    /**
     * @var ScannedDocumentHandle $ScannedDocument_FindByVoucherNumberResult
     */
    protected $ScannedDocument_FindByVoucherNumberResult = null;

    /**
     * @param ScannedDocumentHandle $ScannedDocument_FindByVoucherNumberResult
     */
    public function __construct($ScannedDocument_FindByVoucherNumberResult)
    {
      $this->ScannedDocument_FindByVoucherNumberResult = $ScannedDocument_FindByVoucherNumberResult;
    }

    /**
     * @return ScannedDocumentHandle
     */
    public function getScannedDocument_FindByVoucherNumberResult()
    {
      return $this->ScannedDocument_FindByVoucherNumberResult;
    }

    /**
     * @param ScannedDocumentHandle $ScannedDocument_FindByVoucherNumberResult
     * @return \Economic\ScannedDocument_FindByVoucherNumberResponse
     */
    public function setScannedDocument_FindByVoucherNumberResult($ScannedDocument_FindByVoucherNumberResult)
    {
      $this->ScannedDocument_FindByVoucherNumberResult = $ScannedDocument_FindByVoucherNumberResult;
      return $this;
    }

}

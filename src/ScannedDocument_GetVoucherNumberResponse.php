<?php

namespace Economic;

class ScannedDocument_GetVoucherNumberResponse
{

    /**
     * @var int $ScannedDocument_GetVoucherNumberResult
     */
    protected $ScannedDocument_GetVoucherNumberResult = null;

    /**
     * @param int $ScannedDocument_GetVoucherNumberResult
     */
    public function __construct($ScannedDocument_GetVoucherNumberResult)
    {
      $this->ScannedDocument_GetVoucherNumberResult = $ScannedDocument_GetVoucherNumberResult;
    }

    /**
     * @return int
     */
    public function getScannedDocument_GetVoucherNumberResult()
    {
      return $this->ScannedDocument_GetVoucherNumberResult;
    }

    /**
     * @param int $ScannedDocument_GetVoucherNumberResult
     * @return \Economic\ScannedDocument_GetVoucherNumberResponse
     */
    public function setScannedDocument_GetVoucherNumberResult($ScannedDocument_GetVoucherNumberResult)
    {
      $this->ScannedDocument_GetVoucherNumberResult = $ScannedDocument_GetVoucherNumberResult;
      return $this;
    }

}

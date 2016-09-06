<?php

namespace Economic;

class CreditorEntry_GetVoucherNumberResponse
{

    /**
     * @var int $CreditorEntry_GetVoucherNumberResult
     */
    protected $CreditorEntry_GetVoucherNumberResult = null;

    /**
     * @param int $CreditorEntry_GetVoucherNumberResult
     */
    public function __construct($CreditorEntry_GetVoucherNumberResult)
    {
      $this->CreditorEntry_GetVoucherNumberResult = $CreditorEntry_GetVoucherNumberResult;
    }

    /**
     * @return int
     */
    public function getCreditorEntry_GetVoucherNumberResult()
    {
      return $this->CreditorEntry_GetVoucherNumberResult;
    }

    /**
     * @param int $CreditorEntry_GetVoucherNumberResult
     * @return \Economic\CreditorEntry_GetVoucherNumberResponse
     */
    public function setCreditorEntry_GetVoucherNumberResult($CreditorEntry_GetVoucherNumberResult)
    {
      $this->CreditorEntry_GetVoucherNumberResult = $CreditorEntry_GetVoucherNumberResult;
      return $this;
    }

}

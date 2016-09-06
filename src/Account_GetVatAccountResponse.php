<?php

namespace Economic;

class Account_GetVatAccountResponse
{

    /**
     * @var VatAccountHandle $Account_GetVatAccountResult
     */
    protected $Account_GetVatAccountResult = null;

    /**
     * @param VatAccountHandle $Account_GetVatAccountResult
     */
    public function __construct($Account_GetVatAccountResult)
    {
      $this->Account_GetVatAccountResult = $Account_GetVatAccountResult;
    }

    /**
     * @return VatAccountHandle
     */
    public function getAccount_GetVatAccountResult()
    {
      return $this->Account_GetVatAccountResult;
    }

    /**
     * @param VatAccountHandle $Account_GetVatAccountResult
     * @return \Economic\Account_GetVatAccountResponse
     */
    public function setAccount_GetVatAccountResult($Account_GetVatAccountResult)
    {
      $this->Account_GetVatAccountResult = $Account_GetVatAccountResult;
      return $this;
    }

}

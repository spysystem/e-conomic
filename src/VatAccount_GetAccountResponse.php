<?php

namespace Economic;

class VatAccount_GetAccountResponse
{

    /**
     * @var AccountHandle $VatAccount_GetAccountResult
     */
    protected $VatAccount_GetAccountResult = null;

    /**
     * @param AccountHandle $VatAccount_GetAccountResult
     */
    public function __construct($VatAccount_GetAccountResult)
    {
      $this->VatAccount_GetAccountResult = $VatAccount_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getVatAccount_GetAccountResult()
    {
      return $this->VatAccount_GetAccountResult;
    }

    /**
     * @param AccountHandle $VatAccount_GetAccountResult
     * @return \Economic\VatAccount_GetAccountResponse
     */
    public function setVatAccount_GetAccountResult($VatAccount_GetAccountResult)
    {
      $this->VatAccount_GetAccountResult = $VatAccount_GetAccountResult;
      return $this;
    }

}

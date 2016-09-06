<?php

namespace Economic;

class VatAccount_GetContraAccountResponse
{

    /**
     * @var AccountHandle $VatAccount_GetContraAccountResult
     */
    protected $VatAccount_GetContraAccountResult = null;

    /**
     * @param AccountHandle $VatAccount_GetContraAccountResult
     */
    public function __construct($VatAccount_GetContraAccountResult)
    {
      $this->VatAccount_GetContraAccountResult = $VatAccount_GetContraAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getVatAccount_GetContraAccountResult()
    {
      return $this->VatAccount_GetContraAccountResult;
    }

    /**
     * @param AccountHandle $VatAccount_GetContraAccountResult
     * @return \Economic\VatAccount_GetContraAccountResponse
     */
    public function setVatAccount_GetContraAccountResult($VatAccount_GetContraAccountResult)
    {
      $this->VatAccount_GetContraAccountResult = $VatAccount_GetContraAccountResult;
      return $this;
    }

}

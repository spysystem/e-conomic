<?php

namespace Economic;

class Creditor_GetBankAccountResponse
{

    /**
     * @var string $Creditor_GetBankAccountResult
     */
    protected $Creditor_GetBankAccountResult = null;

    /**
     * @param string $Creditor_GetBankAccountResult
     */
    public function __construct($Creditor_GetBankAccountResult)
    {
      $this->Creditor_GetBankAccountResult = $Creditor_GetBankAccountResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetBankAccountResult()
    {
      return $this->Creditor_GetBankAccountResult;
    }

    /**
     * @param string $Creditor_GetBankAccountResult
     * @return \Economic\Creditor_GetBankAccountResponse
     */
    public function setCreditor_GetBankAccountResult($Creditor_GetBankAccountResult)
    {
      $this->Creditor_GetBankAccountResult = $Creditor_GetBankAccountResult;
      return $this;
    }

}

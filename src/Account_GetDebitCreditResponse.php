<?php

namespace Economic;

class Account_GetDebitCreditResponse
{

    /**
     * @var DebitCredit $Account_GetDebitCreditResult
     */
    protected $Account_GetDebitCreditResult = null;

    /**
     * @param DebitCredit $Account_GetDebitCreditResult
     */
    public function __construct($Account_GetDebitCreditResult)
    {
      $this->Account_GetDebitCreditResult = $Account_GetDebitCreditResult;
    }

    /**
     * @return DebitCredit
     */
    public function getAccount_GetDebitCreditResult()
    {
      return $this->Account_GetDebitCreditResult;
    }

    /**
     * @param DebitCredit $Account_GetDebitCreditResult
     * @return \Economic\Account_GetDebitCreditResponse
     */
    public function setAccount_GetDebitCreditResult($Account_GetDebitCreditResult)
    {
      $this->Account_GetDebitCreditResult = $Account_GetDebitCreditResult;
      return $this;
    }

}

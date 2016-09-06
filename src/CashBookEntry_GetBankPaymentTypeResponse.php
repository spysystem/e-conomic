<?php

namespace Economic;

class CashBookEntry_GetBankPaymentTypeResponse
{

    /**
     * @var BankPaymentTypeHandle $CashBookEntry_GetBankPaymentTypeResult
     */
    protected $CashBookEntry_GetBankPaymentTypeResult = null;

    /**
     * @param BankPaymentTypeHandle $CashBookEntry_GetBankPaymentTypeResult
     */
    public function __construct($CashBookEntry_GetBankPaymentTypeResult)
    {
      $this->CashBookEntry_GetBankPaymentTypeResult = $CashBookEntry_GetBankPaymentTypeResult;
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getCashBookEntry_GetBankPaymentTypeResult()
    {
      return $this->CashBookEntry_GetBankPaymentTypeResult;
    }

    /**
     * @param BankPaymentTypeHandle $CashBookEntry_GetBankPaymentTypeResult
     * @return \Economic\CashBookEntry_GetBankPaymentTypeResponse
     */
    public function setCashBookEntry_GetBankPaymentTypeResult($CashBookEntry_GetBankPaymentTypeResult)
    {
      $this->CashBookEntry_GetBankPaymentTypeResult = $CashBookEntry_GetBankPaymentTypeResult;
      return $this;
    }

}

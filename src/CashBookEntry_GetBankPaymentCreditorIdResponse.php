<?php

namespace Economic;

class CashBookEntry_GetBankPaymentCreditorIdResponse
{

    /**
     * @var string $CashBookEntry_GetBankPaymentCreditorIdResult
     */
    protected $CashBookEntry_GetBankPaymentCreditorIdResult = null;

    /**
     * @param string $CashBookEntry_GetBankPaymentCreditorIdResult
     */
    public function __construct($CashBookEntry_GetBankPaymentCreditorIdResult)
    {
      $this->CashBookEntry_GetBankPaymentCreditorIdResult = $CashBookEntry_GetBankPaymentCreditorIdResult;
    }

    /**
     * @return string
     */
    public function getCashBookEntry_GetBankPaymentCreditorIdResult()
    {
      return $this->CashBookEntry_GetBankPaymentCreditorIdResult;
    }

    /**
     * @param string $CashBookEntry_GetBankPaymentCreditorIdResult
     * @return \Economic\CashBookEntry_GetBankPaymentCreditorIdResponse
     */
    public function setCashBookEntry_GetBankPaymentCreditorIdResult($CashBookEntry_GetBankPaymentCreditorIdResult)
    {
      $this->CashBookEntry_GetBankPaymentCreditorIdResult = $CashBookEntry_GetBankPaymentCreditorIdResult;
      return $this;
    }

}

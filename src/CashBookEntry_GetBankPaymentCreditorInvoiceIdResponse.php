<?php

namespace Economic;

class CashBookEntry_GetBankPaymentCreditorInvoiceIdResponse
{

    /**
     * @var string $CashBookEntry_GetBankPaymentCreditorInvoiceIdResult
     */
    protected $CashBookEntry_GetBankPaymentCreditorInvoiceIdResult = null;

    /**
     * @param string $CashBookEntry_GetBankPaymentCreditorInvoiceIdResult
     */
    public function __construct($CashBookEntry_GetBankPaymentCreditorInvoiceIdResult)
    {
      $this->CashBookEntry_GetBankPaymentCreditorInvoiceIdResult = $CashBookEntry_GetBankPaymentCreditorInvoiceIdResult;
    }

    /**
     * @return string
     */
    public function getCashBookEntry_GetBankPaymentCreditorInvoiceIdResult()
    {
      return $this->CashBookEntry_GetBankPaymentCreditorInvoiceIdResult;
    }

    /**
     * @param string $CashBookEntry_GetBankPaymentCreditorInvoiceIdResult
     * @return \Economic\CashBookEntry_GetBankPaymentCreditorInvoiceIdResponse
     */
    public function setCashBookEntry_GetBankPaymentCreditorInvoiceIdResult($CashBookEntry_GetBankPaymentCreditorInvoiceIdResult)
    {
      $this->CashBookEntry_GetBankPaymentCreditorInvoiceIdResult = $CashBookEntry_GetBankPaymentCreditorInvoiceIdResult;
      return $this;
    }

}

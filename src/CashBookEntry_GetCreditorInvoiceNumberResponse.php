<?php

namespace Economic;

class CashBookEntry_GetCreditorInvoiceNumberResponse
{

    /**
     * @var string $CashBookEntry_GetCreditorInvoiceNumberResult
     */
    protected $CashBookEntry_GetCreditorInvoiceNumberResult = null;

    /**
     * @param string $CashBookEntry_GetCreditorInvoiceNumberResult
     */
    public function __construct($CashBookEntry_GetCreditorInvoiceNumberResult)
    {
      $this->CashBookEntry_GetCreditorInvoiceNumberResult = $CashBookEntry_GetCreditorInvoiceNumberResult;
    }

    /**
     * @return string
     */
    public function getCashBookEntry_GetCreditorInvoiceNumberResult()
    {
      return $this->CashBookEntry_GetCreditorInvoiceNumberResult;
    }

    /**
     * @param string $CashBookEntry_GetCreditorInvoiceNumberResult
     * @return \Economic\CashBookEntry_GetCreditorInvoiceNumberResponse
     */
    public function setCashBookEntry_GetCreditorInvoiceNumberResult($CashBookEntry_GetCreditorInvoiceNumberResult)
    {
      $this->CashBookEntry_GetCreditorInvoiceNumberResult = $CashBookEntry_GetCreditorInvoiceNumberResult;
      return $this;
    }

}
